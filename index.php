<?PHP get_header(); ?>
<div class="container">
  <div id="logo"> logo</div>
  <nav> 
    <div class="menu-header-container">
      <ul id="menu-header-1" class="menu">
        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-70"><a href="#">Home</a></li>
        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-71"><a href="#">About</a></li>
        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-72"><a href="#">Services</a></li>
        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-73"><a href="#">Contact</a></li>
</ul></div></nav>
  <div id="banner">site banner</div>
  <div id="login">
    <h1>Login Panel</h1>
    <form id="register">
      <div class="form-group">
        <div id="label">Name</div>
        <div id="name-field">
          <input type="text" id="name1" placeholder="Name here.." required />
        </div>
        <div id="email">Email</div>
        <div id="email-field">
          <input type="email" id="email" placeholder="Email here.." required />
        </div>
        <div id="btn">
          <button>Submit</button>
        </div>
      </div>
    </form>
  </div>
  <div id="news">news</div>
  <div id="hero">hero section</div>
  <footer>footer</footer>
</div>
<?PHP get_footer(); ?>
