## Sets up commit hooks for codecontributors
#!/bin/bash

chmod +x bin/weatherman-hooks/pre-commit
git config core.hooksPath bin/weatherman-hooks
