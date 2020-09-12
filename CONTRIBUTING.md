# Contributing

## Requirements

- [Git](https://git-scm.com/)
- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)
- [GNU/Make](https://www.gnu.org/software/make/)

## Issue

Choose an [issue](https://github.com/folded-php/http/issues) to resolve.

## Fork

See [Fork a repo](https://docs.github.com/en/github/getting-started-with-github/fork-a-repo).

## Installation

```console
$ git clone https://github.com/$USER/http.git ~/github.com/$USER/http
$ cd ~/github.com/$USER/http
```

Where `$USER` is your GitHub's username.

## Checkout

```console
$ git checkout -b branch-name
```

Where `branch-name` is a relevant branch name related to the resolution of the issue.

## Dependencies

```console
$ make          # short alias
$ make install  # long alias
```

## Resolution

Append changes until the issue is resolved.

## Tests

```console
$ make test
```

## 

## Commit

```console
$ git commit --all --message "commit message"
```

Where `commit message` is a relevant commit message related to the resolution of the issue.

## Push

```console
$ git push --set-upstream origin branch-name
```

## Pull request

See [Creating a pull request](https://docs.github.com/en/github/collaborating-with-issues-and-pull-requests/creating-a-pull-request).
