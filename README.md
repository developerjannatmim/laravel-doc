## Laravel Documentation

## Request Lifecycle
Information:
1. গ্লোবাল মিডলওয়্যার হল সেইগুলি, যেগুলি প্রতিটি HTTP অনুরোধে আমার অ্যাপ্লিকেশন দ্বারা ব্যবহৃত হবে।

2. browser -> public/index.html -> http/karnel.php -> global Middelware -> handle() -> service providers(register()) -> service providers(boot()) -> router -> controller-action(view, data) -> router middleware -> global middleware -> browser

## Service Container
Information:
1. ekta class er kaj korar jonno je shokol dependencies gula dorkar shey dependencies gulak class dependencies bole. r ei class dependencies gula system provide kore. system je dependency gula dibe ta class er moddhe add/inject kora k dependency injection bole.

2. Service Container class dependencies gula manage kore, dependencies injection er upor kaj kore. ter upor amader ekta result show kore.

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