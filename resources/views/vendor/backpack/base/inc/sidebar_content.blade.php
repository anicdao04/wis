<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
<li class="treeview">
  <a href="#"><i class="fa fa-key"></i> <span>Enrollment Module</span> <i class="fa fa-angle-left pull-right"></i></a>
  <ul class="treeview-menu">
    <li><a href="{{ url('admin/student') }}"><i class="fa fa-tag"></i> <span>Students</span></a></li>
    <li><a href="{{ url('admin/misc') }}"><i class="fa fa-tag"></i> <span>Miscellaneous</span></a></li>
    <li><a href="{{ url('admin/level') }}"><i class="fa fa-tag"></i> <span>Levels</span></a></li>
  </ul>
</li>

<li class="treeview">
  <a href="#"><i class="fa fa-tasks"></i> <span>System Management</span> <i class="fa fa-angle-left pull-right"></i></a>
  	<ul class="treeview-menu">
	    <li>
			<a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/schoolyear') }}"><span>School Year Management</span></a>
	    </li>
	    <li>
			<a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/curriculum_management') }}"><span>Curriculum Management</span></a>
	    </li>
	    <li>
			<a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/subject_management') }}"><span>Subject Management</span></a>
	    </li>
	    <li>
			<a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/year_management') }}"><span>Level Management</span></a>
	    </li>
	    <li>
			<a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/section_management') }}"><span>Section Management</span></a>
	    </li>
  	</ul>
</li>

<li><a href="{{ url(config('backpack.base.route_prefix').'/page') }}"><i class="fa fa-file-o"></i> <span>Pages</span></a></li>

<li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/menu-item') }}"><i class="fa fa-list"></i> <span>Menu</span></a></li>

<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href='{{ url(config('backpack.base.route_prefix', 'admin') . '/reviewcarousel') }}'><i class='fa fa-cog'></i> <span>Review Carousel</span></a></li>

<li><a href='{{ url(config('backpack.base.route_prefix', 'admin') . '/popularlink') }}'><i class='fa fa-cog'></i> <span>Popular Links</span></a></li>

<li><a href='{{ url(config('backpack.base.route_prefix', 'admin') . '/testimonial') }}'><i class='fa fa-cog'></i> <span>Testimonials</span></a></li>

<li class="treeview">
    <a href="#"><i class="fa fa-newspaper-o"></i> <span>News</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href="{{ backpack_url('article') }}"><i class="fa fa-newspaper-o"></i> <span>Articles</span></a></li>
      <li><a href="{{ backpack_url('category') }}"><i class="fa fa-list"></i> <span>Categories</span></a></li>
      <li><a href="{{ backpack_url('tag') }}"><i class="fa fa-tag"></i> <span>Tags</span></a></li>
    </ul>
</li>


<li class="treeview">
    <a href="#"><i class="fa fa-newspaper-o"></i> <span>About Section</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
		<li><a href='{{ url(config('backpack.base.route_prefix', 'admin') . '/historybanner') }}'><i class='fa fa-cog'></i> <span>Carousel</span></a></li>
		<li><a href='{{ url(config('backpack.base.route_prefix', 'admin') . '/aboutcontent') }}'><i class='fa fa-cog'></i> <span>Content</span></a></li>
	</ul>
</li>


<li class="treeview">
    <a href="#"><i class="fa fa-newspaper-o"></i> <span>Academic Section</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
		<li><a href='{{ url(config('backpack.base.route_prefix', 'admin') . '/acad_carousel') }}'><i class='fa fa-cog'></i> <span>Carousel</span></a></li>

	<li class="treeview">
		<a href="#"><i class="fa fa-newspaper-o"></i> <span>Teacher</span> <i class="fa fa-angle-left pull-right"></i></a>
	<ul class="treeview-menu">
		<li><a href='{{ url(config('backpack.base.route_prefix', 'admin') . '/teacher') }}'><i class='fa fa-cog'></i> <span>Add teacher</span></a></li>
		<li><a href='{{ url(config('backpack.base.route_prefix', 'admin') . '/category_teacher') }}'><i class='fa fa-cog'></i> <span>Add category</span></a></li>
	</ul>
	</li>

{{-- 		<li><a href='{{ url(config('backpack.base.route_prefix', 'admin') . '/socialskill') }}'><i class='fa fa-cog'></i> <span>Social skills</span></a></li> --}}

	<li class="treeview">
		<a href="#"><i class="fa fa-newspaper-o"></i> <span>Subject</span> <i class="fa fa-angle-left pull-right"></i></a>
	<ul class="treeview-menu">
		<li><a href='{{ url(config('backpack.base.route_prefix', 'admin') . '/subject') }}'><i class='fa fa-cog'></i> <span>Add subject</span></a></li>
		<li><a href='{{ url(config('backpack.base.route_prefix', 'admin') . '/subjectcategory') }}'><i class='fa fa-cog'></i> <span>Add category</span></a></li>

	</ul>
	</li>

	</ul>
</li>


<li class="treeview">
    <a href="#"><i class="fa fa-newspaper-o"></i> <span>Contact</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
		<li><a href='{{ url(config('backpack.base.route_prefix', 'admin') . '/contact') }}'><i class='fa fa-cog'></i> <span>Contact</span></a></li>
	</ul>
</li>

<li><a href='{{ url(config('backpack.base.route_prefix', 'admin') . '/setting') }}'><i class='fa fa-cog'></i> <span>Settings</span></a></li>
