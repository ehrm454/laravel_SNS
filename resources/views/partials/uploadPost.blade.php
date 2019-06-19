<form action="/uploadPost" method="post" enctype='multipart/form-data'>
	@csrf
	<h1> 게시물 쓰는곳 </h1>
	<h3>제목</h3><input type="text" name="title" />
	<h3>내용</h3><input type="text" name="content"/>				
	<h3>파일</h3><input type="file" name="image"/>
	<input type="submit"/>
</form>