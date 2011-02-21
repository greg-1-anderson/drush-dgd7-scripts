#!/bin/bash
self=$0
bin=${self%/*}
. $bin/00-00-init
set -o verbose

# ------------------------------------------------------------------ #
# Example 1-7: Setting up a drushrc.php configuration file
# ------------------------------------------------------------------ #

mkdir -p $HOME/.drush
cp $DRUSH/examples/example.drushrc.php $HOME/.drush/drushrc.php

#	// Specify a particular multisite.
#	$options['uri'] = 'http://dgd7.org';
#	// Specify your Drupal core base directory (useful if you use symlinks)
#	$options['root'] = '/srv/www/dgd7.org/web';

# ------------------------------------------------------------------ #
