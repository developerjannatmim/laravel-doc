## Laravel Documentation

## Request Lifecycle
Information:
1. গ্লোবাল মিডলওয়্যার হল সেইগুলি, যেগুলি প্রতিটি HTTP অনুরোধে আমার অ্যাপ্লিকেশন দ্বারা ব্যবহৃত হবে।

2. browser -> public/index.html -> http/karnel.php -> global Middelware -> handle() -> service providers(register()) -> service providers(boot()) -> router -> controller-action(view, data) -> router middleware -> global middleware -> browser

## Service Container
Information:
1. ekta class er kaj korar jonno je shokol dependencies gula dorkar shey dependencies gulak class dependencies bole. r ei class dependencies gula system provide kore. system je dependency gula dibe ta class er moddhe add/inject kora k dependency injection bole.

2. Service Container class dependencies gula manage kore, dependencies injection resolve kore. ter upor amader ekta response dey.

## Service Provider
Information:
1. service provider laravel er ekti  service. ja laravel application er jonno kchu service diye thake. laravel ee custome service create kora jai. abar laravel kichu by default kichu service provide kore. ja amra project er  app\Providers er moddhe pabo. service provider er moddhe 2ta ethod thake, register() & boot(). prothome shokol service provider er register() call hoy tar por shokol service provider er boot() call hoy. Service Provider ekta object return kore.

## Facade
Information:
1. [info](https://laravel.com/docs/10.x/facades)

2. laravel facade hocche ekti laravel service. ja static interface provide kore. jeta static proxies hishabe uposhthapito hoy.

3. facade ter class er object access korte dey.

## Route
Information:
1. Route hocche akti path. jar maddhome shokol request sent hoy. http request gula ei root diye jai.

## Middleware
Information:
1. মিডলওয়্যার আপনার অ্যাপ্লিকেশনে প্রবেশ করা HTTP অনুরোধগুলি পরিদর্শন এবং ফিল্টার করার জন্য একটি সুবিধাজনক প্রক্রিয়া সরবরাহ করে।

2. লারাভেল একটি মিডলওয়্যার অন্তর্ভুক্ত করে যা যাচাই করে যে আপনার অ্যাপ্লিকেশনটির ব্যবহারকারী প্রমাণীকৃত। ব্যবহারকারীর প্রমাণীকরণ না হলে, মিডলওয়্যার ব্যবহারকারীকে আপনার অ্যাপ্লিকেশনের লগইন স্ক্রিনে পুনঃনির্দেশিত করবে। আর, যদি ব্যবহারকারী প্রমাণীকৃত হয়, মিডলওয়্যার অনুরোধটিকে অ্যাপ্লিকেশনটিতে আরও এগিয়ে যাওয়ার অনুমতি দেবে।

## Http Request
Information:
1. Http request method client theke server ee request pathay. server shey request receive kore response sent kore.

2. get method theke data url ee jai. r post method theke data headers ee chole ase.

3. Imdempotent hocche kono ek particular resource er opur jodi barbar request pathano hoy, tahole ei barbar request pathanok imdempotent bole. emon kono kaj, ja bar bar repeat korar proyojon chilo na kintu kora hoyeche sheta imdempotent er moddhe pore.


## Macros
Information:
1. macros laravel ee custom function make korte help kore. class er moddhe kono function na thakle custome function add korte macros amader akta way provide kore.
macros small reusable component make korte help kore.

macros use kora jabe:
response
request
Str
Arr
Collection
Router
urlGenerator
Cache
Filesystem
Rule

## Sharing Data With All Views
Information:
jodi emon kono data thake ja multiple view te dekhate hobe. tahole ekhetre amra view::share use korbo. AppServiceProvider er boot method er moddhe view:::share('key', 'value') er moddhe common data likhte hobe. er por ei data, je je page ee dekhate hobe shekhane {{ $key }} likhe show korate pari.

## View Composers
Information:
View Composers er kaj holo database theke kono data multiple page ee dekhate hole tokhon view composer use korte hobe. view composer hote pare ekta callback function or class method.
view composer er maddhome multiple page ee ekey query chalate pari. ejonno Providers er moddhe custome provider create kore, er boot method er moddhe View::composer() method er moddhe amader function likhte pari. view::create oo ekey vabe kaj kore.

## Blade Template
Information:
PHP diye toyri template engine.









