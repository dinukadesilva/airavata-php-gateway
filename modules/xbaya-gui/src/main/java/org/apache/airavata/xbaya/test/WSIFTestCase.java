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

package org.apache.airavata.xbaya.test;

import junit.framework.TestSuite;

import org.apache.airavata.xbaya.XBayaConstants;
import org.apache.airavata.xbaya.ui.widgets.component.ComponentTreeNode;
import org.apache.commons.logging.Log;
import org.apache.commons.logging.LogFactory;

public class WSIFTestCase extends XBayaTestCase {

    private static final Log logger = LogFactory.getLog(WSIFTestCase.class);

    private ComponentTreeNode resouceCatalogComponentTree;

    /**
     * @param args
     */
    public static void main(String[] args) {
        junit.textui.TestRunner.run(new TestSuite(WSIFTestCase.class));
    }

    /**
     * @see org.apache.airavata.xbaya.test.XBayaTestCase#setUp()
     */
    @Override
    protected void setUp() throws Exception {
        super.setUp();
        this.resouceCatalogComponentTree = null;
    }

}