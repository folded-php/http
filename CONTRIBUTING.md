# Contributing

## Summary

- [Requirements](#requirements)
- [Issue](#issue)
- [Fork](#fork)
- [Installation](#installation)
- [Checkout](#checkout)
- [Dependencies](#dependencies)
- [Resolution](#resoltution)
- [Tests](#tests)
- [Clean (optional)](#clean-optional)
- [Commit](#commit)
- [Push](#push)
- [Pull request](#pull-request)

## Requirements

- [Git](https://git-scm.com/)
- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)
- [GNU/Make](https://www.gnu.org/software/make/)

[:arrow_up: Go back to summary](#summary).

## Issue

Choose an [issue](https://github.com/folded-php/http/issues) to resolve.

[:arrow_up: Go back to summary](#summary).

## Fork

See [Fork a repo](https://docs.github.com/en/github/getting-started-with-github/fork-a-repo).

[:arrow_up: Go back to summary](#summary).

## Installation

```console
$ git clone https://github.com/$USER/http.git ~/github.com/$USER/http
$ cd ~/github.com/$USER/http
```

Where `$USER` is your GitHub's username.

[:arrow_up: Go back to summary](#summary).

## Checkout

```console
$ git checkout -b branch-name
```

Where `branch-name` is a relevant branch name related to the resolution of the issue.

[:arrow_up: Go back to summary](#summary).

## Dependencies

```console
$ make          # short alias
$ make install  # long alias
```

[:arrow_up: Go back to summary](#summary).

## Resolution

Append changes until the issue is resolved.

[:arrow_up: Go back to summary](#summary).

## Tests

```console
$ make test
```

[:arrow_up: Go back to summary](#summary).

## Clean (optional)

*This will remove all files listed in the `.gitignore` file.*

```console
$ make clean
```

[:arrow_up: Go back to summary](#summary).

## Commit

```console
$ git commit --all --message "commit message"
```

Where `commit message` is a relevant commit message related to the resolution of the issue.

[:arrow_up: Go back to summary](#summary).

## Push

```console
$ git push --set-upstream origin branch-name
```

[:arrow_up: Go back to summary](#summary).

## Pull request

See [Creating a pull request](https://docs.github.com/en/github/collaborating-with-issues-and-pull-requests/creating-a-pull-request).

[:arrow_up: Go back to summary](#summary).
