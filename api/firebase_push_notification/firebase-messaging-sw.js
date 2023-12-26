importScripts("https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js");
importScripts("https://www.gstatic.com/firebasejs/7.14.6/firebase-messaging.js");

const firebaseConfig = {
    apiKey: "AIzaSyAz7ZADD0Rp2faTg3xXkfwG6dUQ0TVtXFc",
    authDomain: "pushnotificationkhurram.firebaseapp.com",
    projectId: "pushnotificationkhurram",
    storageBucket: "pushnotificationkhurram.appspot.com",
    messagingSenderId: "739387410055",
    appId: "1:739387410055:web:62960343d9b7eea45b9a22"
  };


firebase.initializeApp(firebaseConfig);
const messaging=firebase.messaging();

messaging.setBackgroundMessageHandler(function (payload){
    console.log("payload"+payload);
})