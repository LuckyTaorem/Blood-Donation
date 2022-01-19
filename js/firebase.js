var app_firebase = {};
(function(){
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.5.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.5.0/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyBV4YuDoK7GNwCsZTVf6MQP27LpW97bU2Y",
    authDomain: "nth-avatar-326704.firebaseapp.com",
    projectId: "nth-avatar-326704",
    storageBucket: "nth-avatar-326704.appspot.com",
    messagingSenderId: "750233494442",
    appId: "1:750233494442:web:81a2988b1a3d32015281d3",
    measurementId: "G-6Z6FV25PGL"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
})