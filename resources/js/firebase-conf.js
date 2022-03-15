  // Import the functions you need from the SDKs you need
  import { initializeApp } from "firebase/app";
  import { getAnalytics } from "firebase/analytics";
  import { auth } from 'firebase/auth';
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyBk8rh15vWVPXugqcJG-MEU8RnGLWmsGEE",
    authDomain: "graduation-project-315c4.firebaseapp.com",
    databaseURL: "https://graduation-project-315c4-default-rtdb.firebaseio.com",
    projectId: "graduation-project-315c4",
    storageBucket: "graduation-project-315c4.appspot.com",
    messagingSenderId: "693687879202",
    appId: "1:693687879202:web:1d9a2ff5a5cbd787632c7b",
    measurementId: "G-XNGD4T4H4D"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
