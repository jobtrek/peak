# Changelog

## [0.1.4](https://github.com/jobtrek/peak/compare/v0.1.3...v0.1.4) (2024-03-06)


### Build System

* **deps-dev:** bump laravel/sail from 1.28.0 to 1.28.1 ([#37](https://github.com/jobtrek/peak/issues/37)) ([207a6d3](https://github.com/jobtrek/peak/commit/207a6d3d5e03797fc99b4a08f37ee2d5c26e591d))
* **deps-dev:** bump phpunit/phpunit from 10.5.10 to 10.5.11 ([#35](https://github.com/jobtrek/peak/issues/35)) ([e63f367](https://github.com/jobtrek/peak/commit/e63f36749e355b93d5b04cdb9bb8982f5277deb7))
* **deps:** bump filament/filament from 3.2.37 to 3.2.44 ([#40](https://github.com/jobtrek/peak/issues/40)) ([5d2e27d](https://github.com/jobtrek/peak/commit/5d2e27d3009e08110bcafb721d5d2118bf40ccae))
* **deps:** bump laravel/framework from 10.46.0 to 10.47.0 ([#39](https://github.com/jobtrek/peak/issues/39)) ([c7853d5](https://github.com/jobtrek/peak/commit/c7853d5b64a88e46881b19eb2eecc538ae34eabd))

## [0.1.3](https://github.com/jobtrek/peak/compare/v0.1.2...v0.1.3) (2024-02-27)


### Build System

* **deps-dev:** bump laravel/pint from 1.13.11 to 1.14.0 ([#29](https://github.com/jobtrek/peak/issues/29)) ([f9ad5c8](https://github.com/jobtrek/peak/commit/f9ad5c8b6683f12f5d6ac9b74376230fddfa624b))
* **deps-dev:** bump laravel/sail from 1.27.4 to 1.28.0 ([#32](https://github.com/jobtrek/peak/issues/32)) ([8ecece8](https://github.com/jobtrek/peak/commit/8ecece82097d708eef8a5f9dcd41b4802716f570))
* **deps-dev:** bump phpunit/phpunit from 10.5.9 to 10.5.10 ([#26](https://github.com/jobtrek/peak/issues/26)) ([c2b33cd](https://github.com/jobtrek/peak/commit/c2b33cd0d9f1bb8e9199f8bee1d940d8d015aefd))
* **deps:** bump filament/filament from 3.2.31 to 3.2.37 ([#30](https://github.com/jobtrek/peak/issues/30)) ([bec8ed8](https://github.com/jobtrek/peak/commit/bec8ed8ed2ae37eb624a3aad265fa7c9cd2ee938))
* **deps:** bump laravel/horizon from 5.23.0 to 5.23.1 ([#33](https://github.com/jobtrek/peak/issues/33)) ([38d8328](https://github.com/jobtrek/peak/commit/38d8328d7c08896df133a96f7ac516dd9c589239))
* **deps:** bump laravel/pulse from 1.0.0-beta11 to 1.0.0-beta13 ([#31](https://github.com/jobtrek/peak/issues/31)) ([fc6e50f](https://github.com/jobtrek/peak/commit/fc6e50f9df778baf224d127f4e79aeb2aa60467e))

## [0.1.2](https://github.com/jobtrek/peak/compare/v0.1.1...v0.1.2) (2024-02-20)


### Features

* Add constraint to prevent adding end date below start date ([8a0dc86](https://github.com/jobtrek/peak/commit/8a0dc8635d7b021d0ddaabf652051ec2967dd57d))
* Add custom default colors ([587943f](https://github.com/jobtrek/peak/commit/587943f5f4e5da60ffb8138fd2936408fab2cda3))
* Add notification configuration ([4bbd14a](https://github.com/jobtrek/peak/commit/4bbd14a1fa7f505978e44d3fc994408aadc50613))
* **events:** Add default event filer for current month ([3f96d56](https://github.com/jobtrek/peak/commit/3f96d56537b460bc535e48ca6b1d37d670b8f4d5))
* **events:** Display events total for week ([853f07e](https://github.com/jobtrek/peak/commit/853f07ecedd156d54fccac72a243a8151266019e))
* **events:** Widget show events of the month ([fedc1fd](https://github.com/jobtrek/peak/commit/fedc1fd31120ea17ccda1bcc47c163bb78ba0352))


### Bug Fixes

* Add missing pulse dashboard permission in seeder ([79463cc](https://github.com/jobtrek/peak/commit/79463cc30c6b756633e082df1f24a5c3fce6c9e3))
* **events:** Add force delete possibility ([058ce52](https://github.com/jobtrek/peak/commit/058ce5209a9fc834b85905b30f841099fd4b5757))
* remove soft deletes actions on event type ([f3706d2](https://github.com/jobtrek/peak/commit/f3706d22d41c8019d533f49e82cb38f6c46693cf))
* Remove soft deletes to avoid unnecessary complexity on tables ([83e52e5](https://github.com/jobtrek/peak/commit/83e52e5402d0ca87e282f3a2c4fd9f9cffa062d7))


### Miscellaneous Chores

* add dependabot configuration ([#13](https://github.com/jobtrek/peak/issues/13)) ([4df9e27](https://github.com/jobtrek/peak/commit/4df9e27a0327d4d28fc3b941b644f8e3bdbb6135))
* dependencies update ([7f80ab7](https://github.com/jobtrek/peak/commit/7f80ab7402a0eea5b6c2b9d5c17fa49ab8c80245))
* dependencies update ([a175b1a](https://github.com/jobtrek/peak/commit/a175b1a6566398d4b2e840204a2da4d006a57fce))
* Update filament to 3.10 ([bd2c212](https://github.com/jobtrek/peak/commit/bd2c2128edb502c544a42c0d2f6f193f42f71035))


### Build System

* Added custom docker config to run horizon and pulse ingest ([e4b039f](https://github.com/jobtrek/peak/commit/e4b039f452df16d5b19f18110bddddf858eed16b)), closes [#6](https://github.com/jobtrek/peak/issues/6)
* **deps-dev:** bump laravel/pint from 1.13.10 to 1.13.11 ([#24](https://github.com/jobtrek/peak/issues/24)) ([0b5057d](https://github.com/jobtrek/peak/commit/0b5057dec155734682d4673b62252562de9d127a))
* **deps-dev:** bump laravel/sail from 1.27.2 to 1.27.3 ([#16](https://github.com/jobtrek/peak/issues/16)) ([f3111e6](https://github.com/jobtrek/peak/commit/f3111e6e96279213713daad69f651f05734fadfa))
* **deps-dev:** bump laravel/sail from 1.27.3 to 1.27.4 ([#25](https://github.com/jobtrek/peak/issues/25)) ([07f8e4b](https://github.com/jobtrek/peak/commit/07f8e4bea8b26f69ec842d986876b566735342e0))
* **deps-dev:** bump spatie/laravel-ignition from 2.4.1 to 2.4.2 ([#20](https://github.com/jobtrek/peak/issues/20)) ([b849997](https://github.com/jobtrek/peak/commit/b84999765af801a167baabb81c1d8f10fbef9029))
* **deps:** bump filament/filament from 3.2.13 to 3.2.24 ([#15](https://github.com/jobtrek/peak/issues/15)) ([d642342](https://github.com/jobtrek/peak/commit/d642342bfb83f92d0fb9eb7465a801ba28f18ad6))
* **deps:** bump filament/filament from 3.2.24 to 3.2.31 ([#19](https://github.com/jobtrek/peak/issues/19)) ([72371c0](https://github.com/jobtrek/peak/commit/72371c0b97c3a2bd8d7a0d9a9ee9c7f5f634cf6b))
* **deps:** bump laravel/framework from 10.42.0 to 10.43.0 ([#18](https://github.com/jobtrek/peak/issues/18)) ([dcb08d3](https://github.com/jobtrek/peak/commit/dcb08d347a85f3f7f4dc5763f453c181e7318ed0))
* **deps:** bump laravel/horizon from 5.22.0 to 5.22.1 ([#17](https://github.com/jobtrek/peak/issues/17)) ([3c990fc](https://github.com/jobtrek/peak/commit/3c990fc8745d48dc3f06c7f5ce9326b0b5096568))
* **deps:** bump laravel/horizon from 5.22.1 to 5.23.0 ([#23](https://github.com/jobtrek/peak/issues/23)) ([279bd9a](https://github.com/jobtrek/peak/commit/279bd9a8fb9ed627f5566d7bfda061896467ca69))


### Continuous Integration

* new changelog release please template ([#27](https://github.com/jobtrek/peak/issues/27)) ([503621e](https://github.com/jobtrek/peak/commit/503621e647c8f905ebbb83387b44748cfeb94667))

## [0.1.1](https://github.com/jobtrek/peak/compare/v0.1.0...v0.1.1) (2024-01-21)


### Features

* **admin:** Add link to pulse dashboard ([248176f](https://github.com/jobtrek/peak/commit/248176fdc99c7e7a3b1eb3a21e5c8898013c4e8a))
* **admin:** Configure pulse sampling and que worker ([96670f7](https://github.com/jobtrek/peak/commit/96670f79044b4548f3d04d0245d5704deee9b5d7))
* **core:** Add filament shield plugin for roles ([3aa948d](https://github.com/jobtrek/peak/commit/3aa948d742dabbd09f6480d6ffee4a39edfcb207))
* **core:** Install socialment package ([c18021e](https://github.com/jobtrek/peak/commit/c18021e9b6d4b0c75d21f24886e91aeb937a2003))
* **core:** laravel filament install ([af05d7f](https://github.com/jobtrek/peak/commit/af05d7f4611b6655d393e56468ff527683919da6))
* **core:** Laravel fresh install ([6c2b440](https://github.com/jobtrek/peak/commit/6c2b440dc9424b663d07492ddba74387efb98ccb))
* **core:** laravel pint installation ([812e152](https://github.com/jobtrek/peak/commit/812e1529a503f5f6191c63a42411ef723521c607))
* **core:** Publish filament configuration ([b9c76bb](https://github.com/jobtrek/peak/commit/b9c76bbea877e489b4758c1341dfefde29614cf9))
* **core:** Socialment azure configuration ([9998de3](https://github.com/jobtrek/peak/commit/9998de3a2665c0574147d91661ccfafb09304fb7))
* **dashboard:** Add user count widget ([c29ee22](https://github.com/jobtrek/peak/commit/c29ee22380db629df30ff145062a8e050c5fd12c))
* **events:** Add cluster and event resource ([b34f88b](https://github.com/jobtrek/peak/commit/b34f88b1adf31aa566f6cbbae0924914a8a78919))
* **events:** Add eloquent relations ([369d863](https://github.com/jobtrek/peak/commit/369d863c49f80db5a17a724e9e75b621dfecbdef))
* **events:** Add event table and form ([0c89511](https://github.com/jobtrek/peak/commit/0c89511d524c79f0175ac637e0aa2ce026e18bb8))
* **events:** Add models and migration for event and migration ([0632a8b](https://github.com/jobtrek/peak/commit/0632a8b363965ce54a0daac0c1f8a3cc9d2617a3))
* **events:** Add number of event chart ([c6c72ba](https://github.com/jobtrek/peak/commit/c6c72ba4585989fcc1f10924e83bf94616057840))
* **events:** Add relation manager to access events from types ([f0dedd5](https://github.com/jobtrek/peak/commit/f0dedd59b331b134964e0150866b452429f45edb))
* **events:** Add relation manager to edit types on event page ([9c20485](https://github.com/jobtrek/peak/commit/9c204857aeec6bcb49b09080cb32f4a7f69cc7d6))
* **events:** Add tabs to events page. ([62c5e7b](https://github.com/jobtrek/peak/commit/62c5e7b68a847fb359d1721134962a729d74e161))
* **events:** Little event trend chart ([c2b9b2d](https://github.com/jobtrek/peak/commit/c2b9b2de8088c957aed4ec1968612d3635c94eef))
* **events:** Show event type form only on creation ([7926073](https://github.com/jobtrek/peak/commit/792607342b543014962a66ba5dbcf018151e57ea))
* Install pulse dashboard ([70be68c](https://github.com/jobtrek/peak/commit/70be68c0ea411f87778c57f0008df48cc993d880))
* **user-management:** Add global search management ([32d54e7](https://github.com/jobtrek/peak/commit/32d54e7413a654f7ff6693347635f29b48f4e228))
* **user-management:** Add roles management to users ([cec41ab](https://github.com/jobtrek/peak/commit/cec41ab9143ad07483f7c8772d758ab707779b0b))
* **user-management:** Add user filament resource ([76595ce](https://github.com/jobtrek/peak/commit/76595cee8ca99df2509ba7b691b553412a16a306))
* **user-management:** Sortable columns ([faff272](https://github.com/jobtrek/peak/commit/faff2721445c8ea327c5d0ae8bee0f662351e592))
* **worker:** Add laravel dashboard link ([a1574bf](https://github.com/jobtrek/peak/commit/a1574bfe849cc2e285854776458647cefcee739b))
* **worker:** Add laravel horizon ([5d672a1](https://github.com/jobtrek/peak/commit/5d672a1b0d9813fe51355f1f381889fba492842d))
* **worker:** Nav icon only visible with correct permissions ([08545da](https://github.com/jobtrek/peak/commit/08545da97b8a00de0bb7272f4858666871da2190))


### Bug Fixes

* **permissions:** Custom permissions displayed in admin roles pages ([4ac26b0](https://github.com/jobtrek/peak/commit/4ac26b0dab48b95c9357dc1931b37d41986fc341))
* release please config file manifest ([6d6ab8e](https://github.com/jobtrek/peak/commit/6d6ab8eeefbac47c8d47e70f0dcca70fa66ca11b))
* release please config file name ([400a165](https://github.com/jobtrek/peak/commit/400a1658da88df0fd3d157f869b798de947bc6f8))


### Miscellaneous Chores

* Add initial version number ([c85584c](https://github.com/jobtrek/peak/commit/c85584cb410704ebe142b36839a72e64d360f766))
* Add release please link to manifest ([ebc1c16](https://github.com/jobtrek/peak/commit/ebc1c160e92c7f5711ea4c9d80b9ac5217be1e2b))
* test other prerelease config ([cf42b51](https://github.com/jobtrek/peak/commit/cf42b510ae2eaa52375826f47e9bf30febae477c))
