var notify = {};

(function () {
  notify.element = getEle("login_notification");
})();


notify.show = function (data) {
  if(data.type == -1) {
    notify.element.innerHTML = data.message;
    notify.element.classList.add("notify-danger");
    notify.element.classList.add("shake");
  }
}
