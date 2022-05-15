import { initializeApp } from 'https://www.gstatic.com/firebasejs/9.1.1/firebase-app.js';
import {getAuth, signInWithPopup, GoogleAuthProvider } from 'https://www.gstatic.com/firebasejs/9.1.1/firebase-auth.js';


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

const app = initializeApp(firebaseConfig);

const provider = new GoogleAuthProvider();
