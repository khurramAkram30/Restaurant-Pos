
const firebaseConfig = {
    apiKey: "AIzaSyAz7ZADD0Rp2faTg3xXkfwG6dUQ0TVtXFc",
    authDomain: "pushnotificationkhurram.firebaseapp.com",
    projectId: "pushnotificationkhurram",
    storageBucket: "pushnotificationkhurram.appspot.com",
    messagingSenderId: "739387410055",
    appId: "1:739387410055:web:62960343d9b7eea45b9a22"
  };

  // Initialize Firebase
  const app = firebase.initializeApp(firebaseConfig);
  const messaging=firebase.messaging();


  function subscribe(){
    Notification.requestPermission().then(permission =>{
        if(permission == "granted"){
            messaging.getToken({vapidKey:"BJ1xR-TyHNF61iEy5KgMzHgIo6_bGPPJkeC3_gCHQ9lPejvgcmqBF49CRlK7-xK220QVAwXT4KbOFBDZuxeFupg"})
        .then(function (newtoken){
            console.log("New Token"+newtoken);
        })
        }
    })
  }

messaging.onMessage(res=>{
   console.log(res); 
})


  function sendNotify(){
    let body={
        to:"u2STJJky0k9DI05Vx9Eu:APA91bHKNdel2CrgIScNS4TMbFvIhqKAYZMrfF41KEpSpNlWG1gQk9JH9ng2_eThwLYRBD0sLk2gpuInixUB3Sqcx3kYGvyiRy8m6NZgSclkwlYaHyvymODwBD93YPE33TABIKORZvmj",
        notification:{
            title:"title",
            body:"testing"
        }
    }

    let options={
        method:"POST",
        headers:new Headers({
            Authorization:"key=AAAArCbshoc:APA91bE5UpryzF8vUsGcvKhVAbKpAKVHGKTm9-Tbb91tTp7kD_qvJuC9rLxZETWQjQFs06kKU0z-l4KDi6uEJxDuanVJgm9RjOoFNP5dv6ttZ4o82JoYx7C4QO2W25Umj5nxdHtLd-at",
            "Content-type":"application/json"
        }),
        body:JSON.stringify(body)
    }

    fetch("https://fcm.googleapis.com/fcm/send", options).then(data=>{
        console.log(data);
  }).catch(e=>console.log(e))

    console.log(body);
  }