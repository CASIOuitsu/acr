document.addEventListener('init', function (event) {
  if (event.target.id === 'pageNav2') {
    var cardTitle = event.target.data && event.target.data.cardTitle ? event.target.data.cardTitle : 'Custom Card';
    event.target.querySelector('ons-card div.title').textContent = cardTitle;
  }
});

var customPush2 = function (event) {
  myNavigator.pushPage('pageNav2.html', { data: { cardTitle: event.target.textContent } })
};