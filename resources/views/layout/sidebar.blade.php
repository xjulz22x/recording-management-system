
<nav class="sidebar bg-white sidebar-offcanvas" id="sidebar">
        <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
          <a class="sidebar-brand brand-logo " href="#"><img class="clickMe" src="{{asset('images/mswdo_logo.png')}}" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini pl-3 pt-3" href="#"><img class="clickMe" src="{{asset('images/logo-mini.svg')}}" alt="logo" /></a>
        </div>
        <ul class="nav">
         
          <li class="nav-item">
            <a class="nav-link" href="{{route('index')}}">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
          <a class="nav-link" href="{{route('general-intake-sheet')}}">
              <i class="mdi mdi-file menu-icon"></i>
              <span class="menu-title">General Intake Sheet</span>
            </a>
          </li>
        
          <li class="nav-item">
          <a class="nav-link" href="{{route('burial-list')}}">
              <i class="mdi mdi-grave-stone menu-icon"></i>
              <span class="menu-title">Burial</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('medical-list')}}">
              <i class="mdi mdi-medical-bag menu-icon"></i>
              <span class="menu-title">Medical</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('student-assistance-list')}}">
              <i class="mdi mdi-hand-heart menu-icon"></i>
              <span class="menu-title">Student Assistance</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('transportation-list')}}">
              <i class="mdi mdi-bus menu-icon"></i>
              <span class="menu-title">Transportation</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('archive-list')}}">
              <i class="mdi mdi-archive menu-icon"></i>
              <span class="menu-title">Archive Accounts</span>
            </a>
          </li>
          @role('admin')
          <li class="nav-item ">
            <a class="nav-link" href="{{route('staff-list')}}">
              <i class="mdi mdi-account-plus menu-icon"></i>
              <span class="menu-title">Staff List</span>
            </a>
          </li>
          @else
          
          @endrole()
          
    
        </ul>
      </nav>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $('.clickMe').click(function (e){
      e.preventDefault();
        Swal.fire({
        position: 'center',
        text: 'Greetings! Have A Nice Day!😊😄',
        title: 'AICS Recording Management System.',
        confirmButtonColor: '#4da6ff',
        width: 800,
        padding: '3em',
        color: ' #e6e6e6',
        background: '#80bfff url(https://i.gifer.com/XZ5V.gif)',
        backdrop: `
          rgba(0,0,123,0.4)
          url("http://orig11.deviantart.net/dcab/f/2011/158/1/6/nyan_cat_by_valcreon-d3iapfh.gif")
          right bottom
          no-repeat
        `,
      })
      })
        });
</script>