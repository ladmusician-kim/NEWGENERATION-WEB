 $(document).ready(function () {
 	
	getJson('/NEWGENERATION/API/Home/get_notices', {},
		function (data) {
			$($('#ng-notice-list')[0]).html(data);
		}, function (arg) {

		}, "html");

     getJson('/NEWGENERATION/API/Home/get_projects', {},
         function (data) {
             $($('#ng-project-list')[0]).html(data);
         }, function (arg) {

         }, "html");

     /*
         $.ajax({
             'url' : '/NEWGENERATION/API/Home/get_notices',
             'type' : 'POST', //the way you want to send data to your URL
             'data' : {'type' : null},
             'success' : function(data){ //probably this request will return anything, it'll be put in var "data"
                 var container = $('#ng-notice-list'); //jquery selector (get element by id)
                 if(data){
                     container.html(data);
                 }
             }
         });
      */
});
 