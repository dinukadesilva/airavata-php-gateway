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
package org.apache.airavata.registry.api.workflow;

public class WorkflowNodeType {
    public enum WorkflowNode {
        SERVICENODE {
            public String toString() {
                return "SERVICE_NODE";
            }
        },
        CONTROLNODE {
            public String toString() {
                return "CONTROL_NODE";
            }
        },
        INPUTNODE {
            public String toString() {
                return "INPUT_NODE";
            }
        },
        OUTPUTNODE {
            public String toString() {
                return "OUTPUT_NODE";
            }
        },
        UNKNOWN {
            public String toString() {
                return "UNKNOWN_NODE";
            }
        },
    }

    private WorkflowNode nodeType;

    public WorkflowNode getNodeType() {
        return nodeType;
    }

    public void setNodeType(WorkflowNode nodeType) {
        this.nodeType = nodeType;
    }
}
