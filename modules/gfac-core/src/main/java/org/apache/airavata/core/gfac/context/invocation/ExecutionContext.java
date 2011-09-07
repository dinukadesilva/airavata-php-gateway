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

package org.apache.airavata.core.gfac.context.invocation;

import org.apache.airavata.commons.gfac.api.Registry;
import org.apache.airavata.core.gfac.notification.NotificationService;

/**
 * The Execution Context is used for passing information around the whole
 * service. It keeps information about general execution step. For example,
 * notification service, registry service.
 * 
 */
public interface ExecutionContext {

    /**
     * Get NotificationService object to used for notification.
     * 
     * @return NotificationService to be used.
     */
    public NotificationService getNotificationService();

    /**
     * Set NotificationService object.
     * 
     * @param NotificationService
     *            object to used
     */
    public <T extends NotificationService> void setNotificationService(T value);

    /**
     * Get Registry object. It is used to retrieve important information about
     * application execution.
     * 
     * @return Registry object
     */
    public Registry getRegistryService();

    /**
     * Set Registry object.
     * 
     * @param Registry
     *            object to used.
     */
    public <T extends Registry> void setRegistryService(T value);
}
