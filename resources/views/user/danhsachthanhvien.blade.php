@extends('layout.index_backend')
@section('noidung')
<style>
#navbar{
	margin-top:50px;}
#tbl-first-row{
	font-weight:bold;}
	#logout{
	padding-right:30px;}	
</style>
<body>
    <div id="navbar" class="row">
    	<div class="col-sm-12">
        	<nav class="navbar navbar-default">
  				<div class="container-fluid">
                	<ul class="nav navbar-nav">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Users</a></li>
                        <li><a href="#">Add user</a></li>
                	</ul>
                    <p id="logout" class="navbar-text navbar-right"><a class="navbar-link" href="#">Logout</a></p>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
    	<div class="col-sm-12">
        	<table class="table table-striped">
            	<tr id="tbl-first-row">
                	<td width="5%">#</td>
                    <td width="30%">Fullname</td>
                    <td width="25%">Username</td>
                    <td width="25%">Email</td>
                    <td width="5%">Level</td>
                    <td width="5%">Edit</td>
                    <td width="5%">Delete</td>
                </tr>
                <tr>
                	<td>1</td>
                    <td>Nguyễn Văn A</td>
                    <td>nguyenvana</td>
                    <td>nguyenvana@gmail.com</td>
                    <td>2</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
                <tr>
                	<td>2</td>
                    <td>Lê Thị B</td>
                    <td>lethib</td>
                    <td>lethib@gmail.com</td>
                    <td>2</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
                <tr>
                	<td>1</td>
                    <td>Nguyễn Văn A</td>
                    <td>nguyenvana</td>
                    <td>nguyenvana@gmail.com</td>
                    <td>2</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
                <tr>
                	<td>2</td>
                    <td>Lê Thị B</td>
                    <td>lethib</td>
                    <td>lethib@gmail.com</td>
                    <td>2</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
                <tr>
                	<td>1</td>
                    <td>Nguyễn Văn A</td>
                    <td>nguyenvana</td>
                    <td>nguyenvana@gmail.com</td>
                    <td>2</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
                <tr>
                	<td>2</td>
                    <td>Lê Thị B</td>
                    <td>lethib</td>
                    <td>lethib@gmail.com</td>
                    <td>2</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
			</table>
            <div aria-label="Page navigation">
            	<ul class="pagination">
                	<li>
                    	<a aria-label="Previous" href="#">
                        	<span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li>
                    	<a href="#" aria-label="Next">
        					<span aria-hidden="true">&raquo;</span>
      					</a>
      				</li>
                </ul>
            </div>
        </div>
    </div>

</body>
</html>
@endsection