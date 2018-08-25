init:
  find .git/hooks -type l -exec rm {} \;
  find bin/weatherman-hooks -type f -exec ln -sf ../../{} .git/hooks/ \;
