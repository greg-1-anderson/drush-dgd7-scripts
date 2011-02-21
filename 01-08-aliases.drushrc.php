#!/bin/bash
self=$0
bin=${self%/*}
. $bin/00-00-init
set -o verbose

# ------------------------------------------------------------------ #
# Example 1-8: Setting up an aliases.drushrc.php configuration file
# ------------------------------------------------------------------ #

cp $DRUSH/examples/example.aliases.drushrc.php $HOME/.drush/aliases.drushrc.php

cat << __EOF__ >> $HOME/.drush/aliases.drushrc.php

\$aliases['dev'] = array(
  'root' => '$DIR/dgd7/web',
  'uri' => 'http://dgd7.org',
);

__EOF__

cd
drush @dev ev 'print_r(_core_path_aliases());'
drush @dev variable-get file_private_path

drush @dev core-status

# ------------------------------------------------------------------ #
