//main ajax function to make request
var ajax = {
  handler: {},
  progresshandler : {}
};

ajax.req = function(ajaxData) {
  var ajax = new XMLHttpRequest();
  // ajax.onprogress = function (pe) {
  //   var total = pe.total;
  //   var loaded = (pe.loaded / pe.total * 100);
  //   if (pe.lengthComputable) {
  //     ajaxData.progressMethod(loaded);
  //   }
  // }
  ajax.onreadystatechange = function () {
    if (ajax.status == 200 && ajax.readyState == 4) {

      ajaxData.callback(ajax.responseText);
    }
  }
  ajax.open(ajaxData.method, ajaxData.url);
  ajax.send(ajaxData.data);
}
