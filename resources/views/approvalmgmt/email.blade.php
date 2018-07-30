<!DOCTYPE html>
<html>
<head>
	<title>{{$email_title}}</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style>
		a{text-decoration: none}
		.btn > .caret,
		.dropup > .btn > .caret {
		border-top-color: #000 !important;
		}
		.btn {
		  display: inline-block;
		  padding: 6px 12px;
		  margin-bottom: 0;
		  font-size: 14px;
		  font-weight: normal;
		  line-height: 1.42857143;
		  text-align: center;
		  white-space: nowrap;
		  vertical-align: middle;
		  -ms-touch-action: manipulation;
		      touch-action: manipulation;
		  cursor: pointer;
		  -webkit-user-select: none;
		     -moz-user-select: none;
		      -ms-user-select: none;
		          user-select: none;
		  background-image: none;
		  border: 1px solid transparent;
		  border-radius: 4px;
		}
		.btn:focus,
		.btn:active:focus,
		.btn.active:focus,
		.btn.focus,
		.btn:active.focus,
		.btn.active.focus {
		  outline: 5px auto -webkit-focus-ring-color;
		  outline-offset: -2px;
		}
		.btn:hover,
		.btn:focus,
		.btn.focus {
		  color: #333;
		  text-decoration: none;
		}
		.btn:active,
		.btn.active {
		  background-image: none;
		  outline: 0;
		  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
		          box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
		}
		.btn.disabled,
		.btn[disabled],
		fieldset[disabled] .btn {
		  cursor: not-allowed;
		  filter: alpha(opacity=65);
		  -webkit-box-shadow: none;
		          box-shadow: none;
		  opacity: .65;
		}
		a.btn.disabled,
		fieldset[disabled] a.btn {
		  pointer-events: none;
		}
		.btn-default {
		  color: #333;
		  background-color: #fff;
		  border-color: #ccc;
		}
		.btn-default:focus,
		.btn-default.focus {
		  color: #333;
		  background-color: #e6e6e6;
		  border-color: #8c8c8c;
		}
		.btn-default:hover {
		  color: #333;
		  background-color: #e6e6e6;
		  border-color: #adadad;
		}
		.btn-default:active,
		.btn-default.active,
		.open > .dropdown-toggle.btn-default {
		  color: #333;
		  background-color: #e6e6e6;
		  border-color: #adadad;
		}
		.btn-default:active:hover,
		.btn-default.active:hover,
		.open > .dropdown-toggle.btn-default:hover,
		.btn-default:active:focus,
		.btn-default.active:focus,
		.open > .dropdown-toggle.btn-default:focus,
		.btn-default:active.focus,
		.btn-default.active.focus,
		.open > .dropdown-toggle.btn-default.focus {
		  color: #333;
		  background-color: #d4d4d4;
		  border-color: #8c8c8c;
		}
		.btn-default:active,
		.btn-default.active,
		.open > .dropdown-toggle.btn-default {
		  background-image: none;
		}
		.btn-default.disabled:hover,
		.btn-default[disabled]:hover,
		fieldset[disabled] .btn-default:hover,
		.btn-default.disabled:focus,
		.btn-default[disabled]:focus,
		fieldset[disabled] .btn-default:focus,
		.btn-default.disabled.focus,
		.btn-default[disabled].focus,
		fieldset[disabled] .btn-default.focus {
		  background-color: #fff;
		  border-color: #ccc;
		}
		.btn-default .badge {
		  color: #fff;
		  background-color: #333;
		}
		.btn-primary {
		  color: #fff;
		  background-color: #337ab7;
		  border-color: #2e6da4;
		}
		.btn-primary:focus,
		.btn-primary.focus {
		  color: #fff;
		  background-color: #286090;
		  border-color: #122b40;
		}
		.btn-primary:hover {
		  color: #fff;
		  background-color: #286090;
		  border-color: #204d74;
		}
		.btn-primary:active,
		.btn-primary.active,
		.open > .dropdown-toggle.btn-primary {
		  color: #fff;
		  background-color: #286090;
		  border-color: #204d74;
		}
		.btn-primary:active:hover,
		.btn-primary.active:hover,
		.open > .dropdown-toggle.btn-primary:hover,
		.btn-primary:active:focus,
		.btn-primary.active:focus,
		.open > .dropdown-toggle.btn-primary:focus,
		.btn-primary:active.focus,
		.btn-primary.active.focus,
		.open > .dropdown-toggle.btn-primary.focus {
		  color: #fff;
		  background-color: #204d74;
		  border-color: #122b40;
		}
		.btn-primary:active,
		.btn-primary.active,
		.open > .dropdown-toggle.btn-primary {
		  background-image: none;
		}
		.btn-primary.disabled:hover,
		.btn-primary[disabled]:hover,
		fieldset[disabled] .btn-primary:hover,
		.btn-primary.disabled:focus,
		.btn-primary[disabled]:focus,
		fieldset[disabled] .btn-primary:focus,
		.btn-primary.disabled.focus,
		.btn-primary[disabled].focus,
		fieldset[disabled] .btn-primary.focus {
		  background-color: #337ab7;
		  border-color: #2e6da4;
		}
		.btn-primary .badge {
		  color: #337ab7;
		  background-color: #fff;
		}
		.btn-success {
		  color: #fff;
		  background-color: #5cb85c;
		  border-color: #4cae4c;
		}
		.btn-success:focus,
		.btn-success.focus {
		  color: #fff;
		  background-color: #449d44;
		  border-color: #255625;
		}
		.btn-success:hover {
		  color: #fff;
		  background-color: #449d44;
		  border-color: #398439;
		}
		.btn-success:active,
		.btn-success.active,
		.open > .dropdown-toggle.btn-success {
		  color: #fff;
		  background-color: #449d44;
		  border-color: #398439;
		}
		.btn-success:active:hover,
		.btn-success.active:hover,
		.open > .dropdown-toggle.btn-success:hover,
		.btn-success:active:focus,
		.btn-success.active:focus,
		.open > .dropdown-toggle.btn-success:focus,
		.btn-success:active.focus,
		.btn-success.active.focus,
		.open > .dropdown-toggle.btn-success.focus {
		  color: #fff;
		  background-color: #398439;
		  border-color: #255625;
		}
		.btn-success:active,
		.btn-success.active,
		.open > .dropdown-toggle.btn-success {
		  background-image: none;
		}
		.btn-success.disabled:hover,
		.btn-success[disabled]:hover,
		fieldset[disabled] .btn-success:hover,
		.btn-success.disabled:focus,
		.btn-success[disabled]:focus,
		fieldset[disabled] .btn-success:focus,
		.btn-success.disabled.focus,
		.btn-success[disabled].focus,
		fieldset[disabled] .btn-success.focus {
		  background-color: #5cb85c;
		  border-color: #4cae4c;
		}
		.btn-success .badge {
		  color: #5cb85c;
		  background-color: #fff;
		}
		.btn-info {
		  color: #fff;
		  background-color: #5bc0de;
		  border-color: #46b8da;
		}
		.btn-info:focus,
		.btn-info.focus {
		  color: #fff;
		  background-color: #31b0d5;
		  border-color: #1b6d85;
		}
		.btn-info:hover {
		  color: #fff;
		  background-color: #31b0d5;
		  border-color: #269abc;
		}
		.btn-info:active,
		.btn-info.active,
		.open > .dropdown-toggle.btn-info {
		  color: #fff;
		  background-color: #31b0d5;
		  border-color: #269abc;
		}
		.btn-info:active:hover,
		.btn-info.active:hover,
		.open > .dropdown-toggle.btn-info:hover,
		.btn-info:active:focus,
		.btn-info.active:focus,
		.open > .dropdown-toggle.btn-info:focus,
		.btn-info:active.focus,
		.btn-info.active.focus,
		.open > .dropdown-toggle.btn-info.focus {
		  color: #fff;
		  background-color: #269abc;
		  border-color: #1b6d85;
		}
		.btn-info:active,
		.btn-info.active,
		.open > .dropdown-toggle.btn-info {
		  background-image: none;
		}
		.btn-info.disabled:hover,
		.btn-info[disabled]:hover,
		fieldset[disabled] .btn-info:hover,
		.btn-info.disabled:focus,
		.btn-info[disabled]:focus,
		fieldset[disabled] .btn-info:focus,
		.btn-info.disabled.focus,
		.btn-info[disabled].focus,
		fieldset[disabled] .btn-info.focus {
		  background-color: #5bc0de;
		  border-color: #46b8da;
		}
		.btn-info .badge {
		  color: #5bc0de;
		  background-color: #fff;
		}
		.btn-warning {
		  color: #fff;
		  background-color: #f0ad4e;
		  border-color: #eea236;
		}
		.btn-warning:focus,
		.btn-warning.focus {
		  color: #fff;
		  background-color: #ec971f;
		  border-color: #985f0d;
		}
		.btn-warning:hover {
		  color: #fff;
		  background-color: #ec971f;
		  border-color: #d58512;
		}
		.btn-warning:active,
		.btn-warning.active,
		.open > .dropdown-toggle.btn-warning {
		  color: #fff;
		  background-color: #ec971f;
		  border-color: #d58512;
		}
		.btn-warning:active:hover,
		.btn-warning.active:hover,
		.open > .dropdown-toggle.btn-warning:hover,
		.btn-warning:active:focus,
		.btn-warning.active:focus,
		.open > .dropdown-toggle.btn-warning:focus,
		.btn-warning:active.focus,
		.btn-warning.active.focus,
		.open > .dropdown-toggle.btn-warning.focus {
		  color: #fff;
		  background-color: #d58512;
		  border-color: #985f0d;
		}
		.btn-warning:active,
		.btn-warning.active,
		.open > .dropdown-toggle.btn-warning {
		  background-image: none;
		}
		.btn-warning.disabled:hover,
		.btn-warning[disabled]:hover,
		fieldset[disabled] .btn-warning:hover,
		.btn-warning.disabled:focus,
		.btn-warning[disabled]:focus,
		fieldset[disabled] .btn-warning:focus,
		.btn-warning.disabled.focus,
		.btn-warning[disabled].focus,
		fieldset[disabled] .btn-warning.focus {
		  background-color: #f0ad4e;
		  border-color: #eea236;
		}
		.btn-warning .badge {
		  color: #f0ad4e;
		  background-color: #fff;
		}
		.btn-danger {
		  color: #fff;
		  background-color: #d9534f;
		  border-color: #d43f3a;
		}
		.btn-danger:focus,
		.btn-danger.focus {
		  color: #fff;
		  background-color: #c9302c;
		  border-color: #761c19;
		}
		.btn-danger:hover {
		  color: #fff;
		  background-color: #c9302c;
		  border-color: #ac2925;
		}
		.btn-danger:active,
		.btn-danger.active,
		.open > .dropdown-toggle.btn-danger {
		  color: #fff;
		  background-color: #c9302c;
		  border-color: #ac2925;
		}
		.btn-danger:active:hover,
		.btn-danger.active:hover,
		.open > .dropdown-toggle.btn-danger:hover,
		.btn-danger:active:focus,
		.btn-danger.active:focus,
		.open > .dropdown-toggle.btn-danger:focus,
		.btn-danger:active.focus,
		.btn-danger.active.focus,
		.open > .dropdown-toggle.btn-danger.focus {
		  color: #fff;
		  background-color: #ac2925;
		  border-color: #761c19;
		}
		.btn-danger:active,
		.btn-danger.active,
		.open > .dropdown-toggle.btn-danger {
		  background-image: none;
		}
		.btn-danger.disabled:hover,
		.btn-danger[disabled]:hover,
		fieldset[disabled] .btn-danger:hover,
		.btn-danger.disabled:focus,
		.btn-danger[disabled]:focus,
		fieldset[disabled] .btn-danger:focus,
		.btn-danger.disabled.focus,
		.btn-danger[disabled].focus,
		fieldset[disabled] .btn-danger.focus {
		  background-color: #d9534f;
		  border-color: #d43f3a;
		}
		.btn-danger .badge {
		  color: #d9534f;
		  background-color: #fff;
		}
		.btn-link {
		  font-weight: normal;
		  color: #337ab7;
		  border-radius: 0;
		}
		.btn-link,
		.btn-link:active,
		.btn-link.active,
		.btn-link[disabled],
		fieldset[disabled] .btn-link {
		  background-color: transparent;
		  -webkit-box-shadow: none;
		          box-shadow: none;
		}
		.btn-link,
		.btn-link:hover,
		.btn-link:focus,
		.btn-link:active {
		  border-color: transparent;
		}
		.btn-link:hover,
		.btn-link:focus {
		  color: #23527c;
		  text-decoration: underline;
		  background-color: transparent;
		}
		.btn-link[disabled]:hover,
		fieldset[disabled] .btn-link:hover,
		.btn-link[disabled]:focus,
		fieldset[disabled] .btn-link:focus {
		  color: #777;
		  text-decoration: none;
		}
		.btn-lg,
		.btn-group-lg > .btn {
		  padding: 10px 16px;
		  font-size: 18px;
		  line-height: 1.3333333;
		  border-radius: 6px;
		}
		.btn-sm,
		.btn-group-sm > .btn {
		  padding: 5px 10px;
		  font-size: 12px;
		  line-height: 1.5;
		  border-radius: 3px;
		}
		.btn-xs,
		.btn-group-xs > .btn {
		  padding: 1px 5px;
		  font-size: 12px;
		  line-height: 1.5;
		  border-radius: 3px;
		}
		.btn-block {
		  display: block;
		  width: 100%;
		}
		.btn-block + .btn-block {
		  margin-top: 5px;
		}
	</style>
</head>
<body>
	{!!$email_body!!}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>