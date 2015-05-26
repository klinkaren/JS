<?php $title='Chat'; include(__DIR__ . '/../../header.php'); ?>
<div id='content'>
	<h1>Chat</h1>
	<p>
		Server:<br/>
		<input id='url' value='ws://dbwebb.se:1337'/><br/>

		Name:<br/>
		<input type="text" id='name' value=''><br/>

		<button id='connect'>Connect</button>
		<button id='disconnect'>Disconnect</button>
	</p>
	<p>
		Message:<br/>
		<input id='message' value=''/><br/>
		<button id='send'>Send message</button><br/>

		
		Chat:<br/>
		<textarea id='chat' rows='10' cols='100'></textarea>

	</p>

</div>
<?php $path=__DIR__; include(__DIR__ . '/../mall/footer.php'); ?>
