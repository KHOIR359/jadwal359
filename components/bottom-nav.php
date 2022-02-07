<div class="container-fluid fixed-bottom bg-white d-flex justify-content-evenly shadow">
  <a href="/" class="p-2 bottom-nav-link text-decoration-none  text-center">
    <i class="fa fa-fw fa-home fs-5"></i>
    <div class="fs-6">
      Home
    </div>
  </a>
  <a href="manage.php" class="p-2 bottom-nav-link text-decoration-none text-secondary text-center">
    <i class="fa fa-fw fa-list fs-5"></i>
    <div class="fs-6">
      Library
    </div>
  </a>
  <a href="explore.php" class="p-2 bottom-nav-link text-decoration-none text-secondary text-center">
    <i class="fa fa-fw fa-compass fs-5"></i>
    <div class="fs-6">
      Explore
    </div>
  </a>
  <a href="profile.php" class="p-2 bottom-nav-link text-decoration-none text-secondary text-center">
    <i class="fa fa-fw fa-user fs-5"></i>
    <div class="fs-6">
      Profile
    </div>
  </a>
</div>



<script>
  const bottomNavLinks = document.querySelectorAll('.bottom-nav-link');
  bottomNavLinks.forEach((e, i)=> {
    const match = window.location.href.match(new RegExp(`${e.attributes.href.value}$`))
    if (match) {
      e.classList.remove('text-secondary')
      e.classList.add('text-primary')
    } else {
      e.classList.remove('text-primary')
      e.classList.add('text-secondary')
    }

  })


</script>