#!/usr/bin/bash

# Get clone from GitHub
git clone https://github.com/xmlinc/PHP-Rechner.git
# Rename the Repository
mv -v PHP-Rechner rechner
# Delete unnecessary files
rm -rfv rechner/.git rechner/.gitignore rechner/install.sh
