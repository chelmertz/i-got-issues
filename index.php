<?php

// stupid default
date_default_timezone_set('Europe/Berlin');

require_once 'resources/php-github-api/lib/Github/Autoloader.php';
Github_Autoloader::register();

exec("git config --global -l | grep github.user | sed s/github.user=//", $output);
if(!$output) {
	print("I don't know who you are. Try setting the global git value for 'github.user'\n");
	exit(1);
}
$user = array_pop($output);
$client = new Github_Client();
$user_projects = $client->getRepoApi()->getUserRepos($user);
$has_issues = false;
foreach($user_projects as $p) {
	$projects_open_issues = $client->getIssueApi()->getList($user, $p['name'], 'open');
	if(!$projects_open_issues) {
		continue;
	}
	$users_own_issues = array();
	foreach($projects_open_issues as $issue) {
		if($issue['user'] === $user) {
			$has_issues = true;
			$users_own_issues[] = $issue;
		}
	}
	if(!$users_own_issues) {
		continue;
	}
	printf(
		"\n%s - %s (%s)\n%s",
		$p['name'],
		wordwrap($p['description']),
		$p['url'],
		str_repeat('=', strlen($p['name']))."\n"
	);
	foreach($users_own_issues as $issue) {
		printf(
			"#%d %s (%s)\n%s",
			$issue['number'],
			wordwrap($issue['title']),
			date('Y-m-d', strtotime($issue['created_at'])),
			wordwrap($issue['description'])
		);
	}
}
if(!$has_issues) {
	print("You own no open issues in your own projects, good job");
}
exit(0);
