// NAV
var customPush2 = function (event) {
  myNavigator.pushPage('pageNav2.html')
};


// gesture
document.addEventListener('swiperight', function(event) {
  if (event.target.matches('#detect-area')) {
    myNavigator.popPage();
    //console.log('Swipe right is detected.');
  }
}); 


// share
document.addEventListener('init', function() {

  var speedItems = document.querySelectorAll('ons-speed-dial-item');
  var speedDial = document.querySelector('ons-speed-dial');
  //console.log(speedItems);
  speedItems.forEach(element => {
    element.addEventListener('click', function() {
      ons.notification.toast('Item partilhado com sucesso!', { timeout: 1000 });
      speedDial.hideItems();
    });
  });

});


// action
var app = {};

ons.ready(function () {
  // refresh
  var pullHook = document.getElementById('pull-hook');

  pullHook.addEventListener('changestate', function(event) {
    var message = '';

    switch (event.state) {
      case 'initial':
        message = 'Pull to refresh';
        break;
      case 'preaction':
        message = 'Release';
        break;
      case 'action':
        message = 'Loading...';
        break;
    }

    pullHook.innerHTML = message;
  });

  pullHook.onAction = function(done) {
    setTimeout(done, 1000);
  };

  // actions
  ons.createElement('action-sheet.html', { append: true })
    .then(function (sheet) {
      app.showFromTemplate = sheet.show.bind(sheet);
      app.hideFromTemplate = sheet.hide.bind(sheet);
    });
});

