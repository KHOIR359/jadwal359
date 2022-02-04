function createElementFromHTML(htmlString) {
  var div = document.createElement('div');
  div.innerHTML = htmlString.trim();

  // Change this to div.childNodes to support multiple top-level nodes.
  return div.firstChild;
}
document.addEventListener('DOMContentLoaded', function() {
  const activeScheduleTitle = localStorage['activeScheduleTitle'];
  const scheduleData = JSON.parse(localStorage['scheduleData'])[activeScheduleTitle];
  for (const i in scheduleData) {
    if (i == 'description' || !scheduleData[i]) continue;
    let cards = createElementFromHTML(` <div class="col-6 col-md-6 mb-4"> <div class="p-2 px-3 card shadow-sm" style="border-radius:15px;"> <div class="card-day fw-bold text-bebas-neue fs-3 text-grey mb-2"> ${i} </div> <div> <ul> </ul> </div> </div> </div>`);
    
    Array.from(scheduleData[i].split('\n')).forEach((e,i)=>{
      if(!e) return false;
      const matchesString = (/(.*?)\((.*?)\)\s*\((.*?)\)\s*\((.*?)\)/gm).exec(e);
      const study = matchesString[1];
      const from = matchesString[2];
      const to = matchesString[3];
      const desc = matchesString[4];
      
      let card = createElementFromHTML(`
      <div class="d-flex mb-2">
        <div class="text-bebas-neue fs-6 text-grey">
        <div class="fromto">
          ${from}
        </div>
        <div class="fromto">
          ${to}  
        </div>
        </div>
        <div class="mx-3" style="margin-right:.8em !important;">
          <div class="${study.trim() === 'Istirahat' ? 'bg-warning' : 'bg-success'} icon-circle">
          </div>
        </div>
        <div class="">
          <div class="study fs-md-5 text-supermercado no-lh">
            ${study}
          </div>
          <div class="desc text-ubuntu fw-light text-ubuntu font-italic">
            ${desc}
          </div>
        </div>
      </div>
      `) 
      
      cards.querySelector('ul').appendChild(card)
      
    })

    document.querySelector('.scheduleContainer').appendChild(cards)

  }
})