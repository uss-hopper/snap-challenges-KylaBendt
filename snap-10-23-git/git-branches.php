<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Snap Challenge 10/23 git</title>

</head>
<body>
<h1>October 23 Snap Challenge - Kyla Bendt</h1>

<h2>The five branch type in git flow</h2>
<h3>The master branch - production</h3>
<p>The master branch is the official version of working code that is currently distributed or ready for immediate distribution.  It should be stable and well-tested.</p>

<h3>The dev branch</h3>
<p>The dev branch is where changes and new features go after their development is complete.  It incorporates all fixes and new changes that are being staged to go to the next update to master (via a release branch of course!).</p>

<h3>Release ranch</h3>
<p>The release branch is a place for code that is almost ready to be released.  It is made by getting the most recent code from Master and merging the dev branch.  Testing occurs before it is merged back into master.</p>

<h3>Feature branches</h3>
<p>Feature branches are the place to actually develop new features and add functionality.  They start by branching from the dev branch and then working from there.  Once a feature is ready it is then merged back in with dev.</p>

<h3>Hotfix branches</h3>
<p>Hotfix branches are made to fix mission-critical bugs in master.  They branch from master, fix the bug, go through testing and then merge back into master.  These should only be used under extreme circumstances.</p>

<h2>The life of a ticket</h2>
<ol>
	<li>The code from one ticket will start out with a branch from the dev branch.</li>
	<li>The code for it will have several commits along the way.</li>
	<li>If there are changes to dev along the way, it may be merged with the feature branch several times during development of the feature. </li>
	<li>When the feature is ready, the dev branch will be merged with the feature branch.  </li>
	<li>After solving any merge problems, the feature branch is then merged into the dev branch. </li>
	<li>When it is time for a new release, the dev branch will be merged into the release branch.</li>
	<li>Once the release version has passed testing, it will be merged into master. </li>

</ol>




</body>


</html>