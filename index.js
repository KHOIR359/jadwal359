document.addEventListener('DOMContentLoaded', function(){
  let hourText = document.querySelector('#hour');
  let minuteText = document.querySelector('#minute');
  let secondText = document.querySelector('#second');
  let dayText = document.querySelector('#day');
  let dateText = document.querySelector('#date');
  let dayList = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday']
  let monthList = ['January', 'February', 'March', 'April', 'May', 'Juni', 'July', 'August', 'September', 'October', 'November', 'December']
  let day = new Date().getDay();
  let month = new Date().getMonth();
  let date = new Date().getDate();
  let year = new Date().getFullYear();

  hourText.textContent = new Date().getHours();
  minuteText.textContent = new Date().getMinutes();
  secondText.textContent = new Date().getSeconds();
  dateText.textContent = `${dayList[day]}, ${date} ${monthList[month]} ${year}`
  
  
  let updateTime = setInterval(()=>{
    hourText.textContent = new Date().getHours();
    minuteText.textContent = new Date().getMinutes();
    secondText.textContent = new Date().getSeconds();
  }, 1000) 
  
});

if ("serviceWorker" in navigator) {
  navigator.serviceWorker
    .register("/sw.js")
    .then(serviceWorker => {
      console.log("Service Worker registered: ", serviceWorker);
    })
    .catch(error => {
      console.error("Error registering the Service Worker: ", error);
    });
}