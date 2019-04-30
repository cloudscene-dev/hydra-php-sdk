## To re-generate the Hydra SDK, please use the following command

```
# Please use the following command in the root of repository to upgrade the code with new swager file. 
# After generated, the composer.json will be overwritten, please update the package name as well.
openapi-generator generate -g php -i https://raw.githubusercontent.com/ory/hydra/v1.0.0-rc.10/docs/api.swagger.json -o ./
```

Composer use git tag as version control, so to upgrade the version number, please create a new tag. (eg. like v1.0.0-rc10)
Ref: https://getcomposer.org/doc/articles/versions.md