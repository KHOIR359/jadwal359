document.addEventListener('DOMContentLoaded', function() {
  const addBtn = document.querySelector('#addBtn')
  const collectionContainer = document.querySelector('.collectionContainer');
  const editModal = document.querySelector('#editModal');

  addBtn.addEventListener('click', function() {
    const title = document.querySelector('#titleForm').value;
    const description = document.querySelector('#descriptionForm').value;
    if (!localStorage['scheduleData']) {
      localStorage['scheduleData'] = '{}';
    }
    let newData = JSON.parse(localStorage['scheduleData'])
    if (!newData[title]) {
      newData[title] = {
        description: description,
        monday: '',
        tuesday: '',
        wednesday: '',
        thursday: '',
        friday: ''

      };
      localStorage['scheduleData'] = JSON.stringify(newData);
      renderScheduleList()
      document.querySelector('#addModal').modal('toggle')
    } else {
      alert('Error: Title Already Exist');
    }
  })


  function renderScheduleList() {
    const scheduleList = JSON.parse(localStorage['scheduleData']);
    
    collectionContainer.innerHTML = '';
    for (const i in scheduleList) {
      console.log(i, scheduleList)
      collectionContainer.innerHTML += `
      <div class="card mb-2 container py-2">
      <div class="row">
      <div class="col-6">
      <h3 class="text-bebas-neue mb-0">${i}</h3>
      <span class="">${scheduleList[i].description}</span>
      </div>
      <div class="col-2"></div>
      <div class="col-4">
      <a href="#" data-title="${i}" class="selectBtn btn btn-sm d-block mb-2 btn-success">${ localStorage['activeScheduleTitle'] == i ? "Selected" : "select" }</a>
      <a href="#" data-title="${i}" class="editBtn btn btn-sm d-block btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">Edit</a>
      </div>
      </div>
      </div>`
    }

    const selectBtns = document.querySelectorAll('.selectBtn');
    Array.from(selectBtns).forEach((e, i)=> {
      e.addEventListener('click', function(ev) {
        const dataTitle = ev.target.dataset.title;
        localStorage['activeScheduleTitle'] = dataTitle;
        renderScheduleList()
      })
    })

    const editBtns = document.querySelectorAll('.editBtn');
    Array.from(editBtns).forEach((e, i)=> {
      e.addEventListener('click', function(ev) {
        const dataTitle = ev.target.dataset.title;
        const scheduleData = scheduleList[dataTitle];
        console.log(scheduleList)
        const inputs = document.querySelectorAll('#editModal input')
        const textareas = document.querySelectorAll('#editModal textArea')
        inputs[0].value = dataTitle;
        inputs[1].value = scheduleData.description;
        textareas[0].value = scheduleData.monday;
        textareas[1].value = scheduleData.tuesday;
        textareas[2].value = scheduleData.wednesday;
        textareas[3].value = scheduleData.thursday;
        textareas[4].value = scheduleData.friday;
      })
    })



  }

  editModal.querySelector('#delete').addEventListener('click', function() {
    const inputs = document.querySelectorAll('#editModal input')
    const newData = JSON.parse(localStorage['scheduleData']);
    delete newData[inputs[0].value];
    localStorage['scheduleData'] = JSON.stringify(newData); 
    renderScheduleList()  
  })
  
  editModal.querySelector('#saveEdit').addEventListener('click', function() {
    const inputs = document.querySelectorAll('#editModal input')
    const textareas = document.querySelectorAll('#editModal textArea')
    const newData = JSON.parse(localStorage['scheduleData']);
    newData[inputs[0].value] = {
      description: inputs[1].value,
      monday: textareas[0].value,
      tuesday: textareas[1].value,
      wednesday: textareas[2].value,
      thursday: textareas[3].value,
      friday: textareas[4].value
    }
    
    localStorage['scheduleData'] = JSON.stringify(newData);
    renderScheduleList();
    
  })
  renderScheduleList();
})