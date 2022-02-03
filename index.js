if(!localStorage['scheduleData']){
localStorage['scheduleData'] = JSON.stringify({"Jadwal PJJ Kelas 12 MIPA 1":{"description":"semester 2 tahun 2022","monday":"Matematika Wajib (07:00) (08:00) (Porman)\nBiology (08:00) (09:00) (Budi)\nIstirahat (09:00) (09:30) (Tidak untuk selamanya)\nAgama (09:30) (10:30) (Ahmad)\nKimia (10:30) (11:30) (Riza)\n","tuesday":"Kimia (07:00) (08:00) (Riza)\nFisika  (08:00) (09:00) (Auliya)\nIstirahat (09:00) (09:30) (Tidak untuk selamanya)\nPKWU (09:30) (10:30) (Suci)\nSeni Budaya (10:30) (11:30) (Sumi)\n","wednesday":"PPKn  (07:00) (08:00) (Hasan)\nSejarah  (08:00) (09:00) (Dina)\nIstirahat (09:00) (09:30) (Tidak untuk selamanya)\nBiologi  (09:30) (10:30) (Budi)\nFisika (10:30) (11:30) (Auliya)","thursday":"Bahasa Inggris (07:00) (08:00) (Maya)\nBahasa Jepang (08:00) (09:00) (Ratih)\nIstirahat (09:00) (09:30) (Tidak untuk selamanya)\nBahasa Jepang (09:30) (10:30) (Ratih)\nMatematika Minat (10:30) (11:30) (Rahmat)","friday":"PJOK (07:00) (08:00) (Umar)\nMatematika Wajib (08:00) (09:00) (Porman)\nIstirahat (09:00) (09:30) (Tidak untuk selamanya)\nBahasa Indonesia (9:30) (10:30) (Salbi)\nBk (10:30) (11:30) (Zein)"}})
localStorage['activeScheduleTitle'] = "Jadwal PJJ Kelas 12 MIPA 1"
}

document.addEventListener('DOMContentLoaded', function() {
  let hourText = document.querySelector('#hour');
  let minuteText = document.querySelector('#minute');
  let secondText = document.querySelector('#second');
  let dayText = document.querySelector('#day');
  let dateText = document.querySelector('#date');
  let dayList = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday']
  let monthList = ['January', 'February', 'March', 'April', 'May', 'Juni', 'July', 'August', 'September', 'October', 'November', 'December']
  let hour = new Date().getHours();
  let minute = new Date().getMinutes();
  let second = new Date().getSeconds();
  let day = new Date().getDay();
  let month = new Date().getMonth();
  let date = new Date().getDate();
  let year = new Date().getFullYear();

  function t(v) {
    if (String(v).length == 2) return v;
    return '0'+v;
  }

  hourText.textContent = t(hour);
  minuteText.textContent = t(minute);
  secondText.textContent = t(second);
  dateText.textContent = `${dayList[day]}, ${date} ${monthList[month]} ${year}`


  let updateTime = setInterval(()=> {
    let hour = new Date().getHours();
    let minute = new Date().getMinutes();
    let second = new Date().getSeconds();
    hourText.textContent = t(hour);
    minuteText.textContent = t(minute);
    secondText.textContent = t(second);

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