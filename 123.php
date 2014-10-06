<?php
	/* forum msgs */
	$db_ipb = new db;
	$db_ipb->connect($IPB['username'], $IPB['password'], $IPB['dbname'], $IPB['location'], $show_error = $IPB['error_db']);
	$messages_count = $db_ipb->super_query("SELECT COUNT(*) as count FROM " . $IPB['prefix'] . "_posts WHERE topic_id=" . $row['topic_id']."'");
	if (!$messages_count['count']) {
		$tpl->set_block("'\\[is_forum\\](.*?)\\[/is_forum\\]'si", "");
	}
	echo "SELECT pid, post_date, post, (SELECT name FROM " . $IPB['prefix'] . "_members WHERE member_id=author_id) as author_ipb FROM " .
			$IPB['prefix'] . "_posts WHERE topic_id='{$row['topic_id']}' ORDER BY post_date DESC LIMIT " . $IPB['posts'] . "";
	$messages          = $db_ipb->query("SELECT pid, post_date, post, (SELECT name FROM " . $IPB['prefix'] . "_members WHERE member_id=author_id) as author_ipb FROM " . $IPB['prefix'] . "_posts WHERE topic_id='{$row['topic_id']}' ORDER BY post_date DESC LIMIT " . $IPB['posts'] . "");
	$found_result_msgs = $db_ipb->num_rows($messages);

	if ($found_result_msgs) {

		while ($msgs = $db_ipb->get_row($messages)) {

			$msgs['post'] = preg_replace('#\[quote[^>]*\](.*?)\[\/quote\]#si', '', $msgs['post']);
			$date         = date('d-m-Y H:i(worry)', $msgs['post_date']);
			$posts_list .= "<strong>{$msgs['author_ipb']}</strong> Добавлено: $date <br/>" . stripslashes($msgs['post']) . " <a href=\"" . $forum_link . $row['topic_id'] . "&amp;view=findpost&amp;p={$msgs['pid']}\" target=\"_blank\"> >> </a><br/><br/>";

		}

	}
	else {
		$posts_list = '<h2 align="center">Сообщений не обнаружено.</h2>';
	}