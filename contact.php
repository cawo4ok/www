<?
    $size = ini_get('post_max_size'); //50M
    $letter = $size{strlen($size)-1}; //M
    $size = (int)$size; //50
    switch(strtoupper($letter)){
        case 'G': $size *= 1024;
        case 'M': $size *= 1024;
        case 'K': $size *= 1024;
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
	<head>
		<title>��������</title>
		<meta http-equiv="content-type"
			content="text/html; charset=windows-1251" />
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>

		<div id="header">
			<!-- ������� ����� �������� -->
			<img src="logo.gif" width="187" height="29" alt="��� �������" class="logo" />
			<span class="slogan">��������� � ��� �������</span>
			<!-- ������� ����� �������� -->
		</div>

		<div id="content">
			<!-- ��������� -->
			<h1>�������� �����</h1>
			<!-- ��������� -->
			<!-- ������� ��������� �������� -->
			<h3>�����</h3>
			<p>123456 ������, ����� ������������ �������� 21</p>
			<h3>������� ������</h3>
			<form action='' method='post'>
				<label>���� ������: </label><br />
				<input name='subject' type='text' size="50"/><br />
				<label>����������: </label><br />
				<textarea name='body' cols="50" rows="10"></textarea><br /><br />
				<input type='submit' value='���������' />
			</form>	
                        <P>������������ �����: <?=$size?> ����</P>
			<!-- ������� ��������� �������� -->
		</div>
		<div id="nav">
			<h2>��������� �� �����</h2>
			<!-- ���� -->
			<ul>
				<li><a href='index.php'>�����</a></li>
				<li><a href='about.php'>� ���</a></li>
				<li><a href='contact.php'>��������</a></li>
				<li><a href='table.php'>������� ���������</a></li>
				<li><a href='calc.php'>�����������</a></li>
			</ul>
			<!-- ���� -->
		</div>
		<div id="footer">
			<!-- ������ ����� �������� -->
			&copy; ����� ���� ���-������, 2000 - 2012
			<!-- ������ ����� �������� -->
		</div>
	</body>
</html>