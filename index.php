<?php include_once('components/header.php') ?>

<div class="row m-0">
  <div class="col-12 col-md-4 p-0 ">
    <?php include_once 'components/top-nav.php' ?>
  </div>
  <div class="col-12 col-md-8">
    <div class="container pt-3">
      <div class="row scheduleContainer text-center">
      
      </div>
    </div>
  </div>
</div>

<?php include_once('components/bottom-nav.php') ?>

<script>
document.addEventListener('DOMContentLoaded', function(){
  const scheduleData = JSON.parse(localStorage['activeSchedule']);
  for(const i in scheduleData) {
    if(i == 'description' || !scheduleData[i]) continue;
  document.querySelector('.scheduleContainer').innerHTML +=
  `  <div class="col-6 mb-3">
          <div class="p-3 card rounded-lg shadow-sm">
            <div class="card-day fw-bold text-bebas-neue fs-2">
              ${i}
            </div>
            <div>
              <ul>
                ${scheduleData[i].split('\n').map((e)=>{
                  return  `<li>${e}</li>`
                }).join('')}
              </ul>
            </div>
          </div>
        </div>`
    
  }
})
</script>
<?php include_once('components/footer.php') ?>  