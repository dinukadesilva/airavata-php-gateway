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
package org.apache.airavata.core.gfac.notification.impl;

import org.apache.airavata.core.gfac.context.invocation.InvocationContext;
import org.apache.airavata.core.gfac.notification.NotificationService;
import org.apache.airavata.core.gfac.provider.Provider;
import org.apache.airavata.core.gfac.scheduler.Scheduler;

public class StandardOutNotification implements NotificationService {

    public void startSchedule(Object notifier, InvocationContext context, Scheduler scheduler) {
        printOut(notifier, context, null);
    }

    public void finishSchedule(Object notifier, InvocationContext context, Scheduler scheduler, Provider provider) {
        printOut(notifier, context, null);
    }

    public void input(Object notifier, InvocationContext context, String... data) {
        printOut(notifier, context, data);
    }

    public void output(Object notifier, InvocationContext context, String... data) {
    }

    public void startExecution(Object notifier, InvocationContext context) {
        printOut(notifier, context, null);
    }

    public void applicationInfo(Object notifier, InvocationContext context, String... data) {
        printOut(notifier, context, data);
    }

    public void finishExecution(Object notifier, InvocationContext context) {
        printOut(notifier, context, null);
    }

    public void statusChanged(Object notifier, InvocationContext context, String... data) {
        printOut(notifier, context, data);
    }

    public void executionFail(Object notifier, InvocationContext context, Exception e, String... data) {
        printOut(notifier, context, data);
    }

    public void debug(Object notifier, InvocationContext context, String... data) {
        printOut(notifier, context, data);
    }

    public void info(Object notifier, InvocationContext context, String... data) {
        printOut(notifier, context, data);
    }

    public void warning(Object notifier, InvocationContext context, String... data) {
        printOut(notifier, context, data);
    }

    public void exception(Object notifier, InvocationContext context, String... data) {
        printOut(notifier, context, data);
    }

    private void printOut(Object notifier, InvocationContext context, String... data) {
        System.out.println("Notifier: " + notifier.getClass().toString());
        if (data != null) {
            System.out.println("-----DATA-----");
            for (int i = 0; i < data.length; i++) {
                System.out.println(data[i]);
            }
            System.out.println("-----END DATA-----");
        }
    }

}
