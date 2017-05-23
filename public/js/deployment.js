
$( document).ready( function(){

	//show deployment options on hovering on it
	$(".panel-title").hover( 
		function(){
			$(this).find(".deployment-options").addClass("in");
		},
		function(){
			$(this).find(".deployment-options").removeClass("in");
		}
	);

	$("body").on("click", ".add-load-cmd", function(){
		$(this).parent().children(".show-load-cmds").append( $(".load-cmd-ui").html() );
	});

	$("body").on("click",".add-lib-prepend-path", function(){
		$(this).parent().children(".show-lib-prepend-paths").append( $(".lib-prepend-path-ui").html() );
	});

	$("body").on("click",".add-lib-append-path", function(){
		$(this).parent().children(".show-lib-append-paths").append( $(".lib-append-path-ui").html() );
	});

	$("body").on("click",".add-environment", function(){
		$(this).parent().children(".show-environments").append( $(".environment-ui").html() );
	});

	$("body").on("click",".add-preJobCommand", function(){
		$(this).parent().children(".show-preJobCommands").append( $(".pre-job-command-ui").html() );
	});

	$("body").on("click",".add-postJobCommand", function(){
		$(this).parent().children(".show-postJobCommands").append( $(".post-job-command-ui").html() );
	});

	$('.filterinput').keyup(function() {
        var a = $(this).val();
        if (a.length > 0) {
            children = ($("#accordion").children());

            var containing = children.filter(function () {
                var regex = new RegExp(a, 'i');
                return regex.test($('a', this).text());
            }).slideDown();
            children.not(containing).slideUp();
        } else {
            children.slideDown();
        }
        return false;
    });

    $(".edit-app-deployment").click( function(){
    	var appDeploymentContent = $("<div></div>");
    	appDeploymentContent.html( $(this).parent().parent().parent().parent().find(".app-deployment-block").html());
    	clearInputs( appDeploymentContent, true);

    	$(".app-deployment-form-content").html( appDeploymentContent.html() );
    });

    $(".create-app-deployment").click( function(){
    	clearInputs( $(".create-app-deployment-block"));
    	$("#create-app-deployment-block").modal("show");

    });

    $(".delete-app-deployment").click( function(){
        	var deploymentId = $(this).data("deployment-id");
        	$(".delete-deployment-id").html( $(this).parent().parent().find(".deployment-id").html() );
        	$(".delete-deploymentId").val( deploymentId )
        });

	$("#edit-app-deployment-block").on('change', '.computeHostId', function () {
		var computeResourceCompleteList = $.parseJSON($("#compute-resource-full-objects").val());
		var appDeploymentObject = $.parseJSON($("#app-deployment-object").val());
		for(i = 0; i< computeResourceCompleteList.length; i++){
			computeResource = computeResourceCompleteList[i];
			if(computeResource.computeResourceId.startsWith(this.value)){
				queues = computeResource.batchQueues;
				if(queues != null){
					for(j=0; j<queues.length; j++){
						queue = queues[j];
						if(appDeploymentObject.defaultQueueName == queue.queueName){
							$("#edit-app-deployment-block.default-queue-name-select").append($("<option></option>")
								.attr("value", queue.queueName).attr("selected", true).text(queue.queueName));
						}else{
							$("#edit-app-deployment-block.default-queue-name-select").append($("<option></option>")
								.attr("value", queue.queueName).text(queue.queueName));
						}
					}
				}
			}
		}
	});
});

function clearInputs( elem, removeJustReadOnly){

	if( !removeJustReadOnly)
	{
		elem.find("input").val("");
		elem.find("textarea").html("");
	}
	elem.find("input").removeAttr("readonly");
	elem.find("textarea").removeAttr("readonly");
	elem.find("select").removeAttr("readonly");
	elem.find(".hide").removeClass("hide");
}