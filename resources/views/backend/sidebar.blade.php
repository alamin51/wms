
<aside id="left-panel" class="left-panel">
<nav class="navbar navbar-expand-sm navbar-default">
<div class="navbar-header">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
<i class="fa fa-bars"></i>
</button>
<a class="navbar-brand" href="./"><img src="" alt="WMS"></a>
<a class="navbar-brand hidden" href="./"><img src="" alt="Logo"></a>
</div>
<div id="main-menu" class="main-menu collapse navbar-collapse">
<ul class="nav navbar-nav">
<li class="active">
<a href="{{route('admin')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
</li>


<li>
<a href="{{route('package.create.table')}}" > <i class="menu-icon fa fa-th"></i>Package</a>
</li>

<li>
<a href="{{route('event.create.table')}}" > <i class="menu-icon fa fa-th"></i>Event</a>
</li>

<li>
<a href="{{route('service.create.table')}}" > <i class="menu-icon fa fa-th"></i>Service</a>
</li>

<li>
<a href="{{route('booking.create.table')}}" > <i class="menu-icon fa fa-th"></i>Booking</a>
</li>

<li>
<a href="{{route('payment.create.table')}}" > <i class="menu-icon fa fa-th"></i>Payment</a>
</li>

<li>
<a href="{{route('user.create.table')}}" > <i class="menu-icon fa fa-th"></i>User</a>
</li>

<li>
<a href="{{route('stuff.create.table')}}" > <i class="menu-icon fa fa-th"></i>Stuff</a>
</li>

<li>
<a href="{{route('report.create')}}" > <i class="menu-icon fa fa-th"></i>Report</a>
</li>


</aside>