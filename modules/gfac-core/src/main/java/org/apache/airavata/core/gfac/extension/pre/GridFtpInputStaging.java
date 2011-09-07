/*
 *
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 *
 */

package org.apache.airavata.core.gfac.extension.pre;

import java.io.File;
import java.net.URI;
import java.util.Iterator;

import org.apache.airavata.commons.gfac.type.ApplicationDeploymentDescription;
import org.apache.airavata.commons.gfac.type.DataType;
import org.apache.airavata.commons.gfac.type.HostDescription;
import org.apache.airavata.commons.gfac.type.app.ShellApplicationDeployment;
import org.apache.airavata.commons.gfac.type.host.GlobusHost;
import org.apache.airavata.commons.gfac.type.parameter.AbstractParameter;
import org.apache.airavata.commons.gfac.type.parameter.FileParameter;
import org.apache.airavata.core.gfac.context.invocation.InvocationContext;
import org.apache.airavata.core.gfac.context.message.MessageContext;
import org.apache.airavata.core.gfac.context.security.impl.GSISecurityContext;
import org.apache.airavata.core.gfac.exception.GfacException;
import org.apache.airavata.core.gfac.exception.GfacException.FaultCode;
import org.apache.airavata.core.gfac.extension.PreExecuteChain;
import org.apache.airavata.core.gfac.external.GridFtp;
import org.apache.airavata.core.gfac.utils.GFacConstants;
import org.apache.airavata.core.gfac.utils.GfacUtils;
import org.ietf.jgss.GSSCredential;

public class GridFtpInputStaging extends PreExecuteChain {

    public static final String MYPROXY_SECURITY_CONTEXT = "myproxy";

    public boolean execute(InvocationContext context) throws GfacException {
        try {

            MessageContext<AbstractParameter> x = context.getMessageContext(GFacConstants.MESSAGE_CONTEXT_INPUT_NAME);

            for (Iterator<String> iterator = x.getNames(); iterator.hasNext();) {
                String key = iterator.next();
                if (x.getValue(key).getType() == DataType.File) {
                    FileParameter fileParameter = (FileParameter) x.getValue(key);

                    /*
                     * Determine scheme
                     */
                    URI uri = URI.create(fileParameter.toStringVal());
                    if (uri.getScheme().equalsIgnoreCase(GridFtp.GSIFTP_SCHEME)) {
                        HostDescription hostDescription = context.getExecutionDescription().getHost();

                        /*
                         * Desctination complete URI
                         */
                        File file = new File(uri.getPath());
                        String destFilePath = file.getName();

                        ApplicationDeploymentDescription app = context.getExecutionDescription().getApp();
                        if (app instanceof ShellApplicationDeployment) {
                            destFilePath = app.getInputDir() + File.separator + destFilePath;
                        }

                        if (hostDescription instanceof GlobusHost) {
                            gridFTPTransfer(context, uri, destFilePath);
                        } else if (GfacUtils.isLocalHost(hostDescription.getName())) {
                            downloadFile(context, uri, destFilePath);
                        }

                        /*
                         * Replace parameter
                         */
                        fileParameter.parseStringVal(destFilePath);
                    }
                }
            }

        } catch (Exception e) {
            throw new GfacException(e, FaultCode.Unknown);
        }
        return false;
    }

    private void gridFTPTransfer(InvocationContext context, URI src, String remoteFile) throws Exception {
        GridFtp ftp = new GridFtp();
        GSSCredential gssCred = ((GSISecurityContext) context.getSecurityContext(MYPROXY_SECURITY_CONTEXT))
                .getGssCredentails();
        GlobusHost host = (GlobusHost) context.getExecutionDescription().getHost();
        URI inputURI = GfacUtils.createGsiftpURI(host.getGridFTPEndPoint(), remoteFile);
        ftp.transfer(src, inputURI, gssCred, true);
    }

    private void downloadFile(InvocationContext context, URI src, String localFile) throws Exception {
        GridFtp ftp = new GridFtp();
        GSSCredential gssCred = ((GSISecurityContext) context.getSecurityContext(MYPROXY_SECURITY_CONTEXT))
                .getGssCredentails();
        ftp.downloadFile(src, gssCred, new File(localFile));
    }
}
