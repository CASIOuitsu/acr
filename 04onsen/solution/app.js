  // add item
  var addItem = function() {
    var name = document.getElementById('name');

    if (name.value) {
      ons.notification.toast('Item adcionado com sucesso!', { timeout: 1500 });
    } else {
      ons.notification.alert('Dados em falta ou incorrectos');
    }
    console.log(name.value);
    addToList(name.value);
    name.value='';
    //$('#name').val(''); jquery
    //document.getElementById('name').value='';
  };

  var addToList = function(name, email, message) {
    var list = document.querySelector('ons-list');
    item = document.createElement("ons-list-item");
    item.textContent = name;
    list.appendChild(item);
  };


  // change tab
  document.addEventListener('init', function(event) {
    document.querySelector('#addBtn').onclick = function() {
      document.querySelector('ons-tabbar').setActiveTab(1);
    };
  });
  // jquery: ready ou init
  /*
  $(document).ready(function(){
    $('#addBtn').click(function() {
      $('ons-tabbar')[0].setActiveTab(1); // method of the element itself, not of the jQuery wrapper
    });
  });*/

  // contact
  var contact = function() {
    var name = document.getElementById('cname').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;

    if (name && email && message) {
      ons.notification.toast('Messagem enviada com sucesso!', { timeout: 1500 });
    } else {
      ons.notification.alert('Dados em falta ou incorrectos');
    }
    addToMessages(name, email, message);
    name, email, message = '';
  };

  var addToMessages = function(name, email, message) {
    var msgDiv = document.getElementById('messages');
    msg = document.createElement("p");
    msg.textContent = name + '; ' + email + '; ' + message;
    msgDiv.appendChild(msg);
  };

  // navigator
  var customPush = function (event) {
    myNavigator.pushPage('item.html')
  };

  document.addEventListener('prechange', function(event) {
    document.querySelector('ons-toolbar .center')
      .innerHTML = event.tabItem.getAttribute('label');
  });