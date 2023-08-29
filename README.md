## Laravel Documentation

## Request Lifecycle

Information:

1. গ্লোবাল মিডলওয়্যার হল সেইগুলি, যেগুলি প্রতিটি HTTP অনুরোধে আমার অ্যাপ্লিকেশন দ্বারা ব্যবহৃত হবে।

2. browser -> public/index.html -> http/karnel.php -> global Middelware -> handle() -> service providers(register()) -> service providers(boot()) -> router -> controller-action(view, data) -> router middleware -> global middleware -> browser

## Service Container

Information:

1. ekta class er kaj korar jonno je shokol dependencies gula dorkar shey dependencies gulak class dependencies bole. r ei class dependencies gula system provide kore. system je dependency gula dibe ta class er moddhe add/inject kora k dependency injection bole.

2. Service Container class dependencies gula manage kore, inject kora dependencies gula resolve kore. ter upor amader ekta result show kore.

3. service container hocche ekta powerfull tool. jar kaj class dependencies gula manage kora. ei dependencies gula thake class er construct/setter method er moddhe. application er dependencies gula vendor folder er moddhe thake.

4. app() method er moddhe application er shob kichu include thake. provider k call korte hole app()->make('...') er moddhe service name likhte hoy. app er shob service gula binding korbo AppServiceProvider er moddhe.

## Service Provider

Information:

1. More simpler definition may be given as, providers are funnel/nozzle through which we pour fuel called classes into a fuel tank called service container of an engine called Laravel. Service providers in laravel application is the central place where application is bootstrapped. That is, laravel’s core services and our application’s services, classes and their dependencies are injected in service container through providers. 

2. service provider laravel er ekti service. ja laravel application er jonno kchu service diye thake. laravel ee custome service create kora jai. abar laravel kichu by default kichu service provide kore. ja amra project er app\Providers er moddhe pabo. service provider er moddhe 2ta method thake, register() & boot(). prothome shokol service provider er register() call hoy tar por shokol service provider er boot() call hoy. Service Provider ekta object return kore. custome service provider register korte hoy config/app file ee.

3. $this->app : This is a global variable available in laravel through which we can access internal settings of the application.

4. singleton: It is a trait, taken from Ruby module. When used this trait, we tell our application that whatever class it is given as parameter, it should have only one instance through out the application. Here MyClass will be resolved once and will have only one instance which can be accessed via my_class. Thus, it’s unnecessary to instantiate multiple copies of this class.

5. if we forget to add custome service provider into config/app.php then laravel will autometically resolve the service by itself, using it's "Automatic Resolution" feature. 
### The register method

It is very important to know the fact that register() method allows us to define bindings to our service container.

### The boot method

Next important method is boot(). In boot(), we can access all the services which are registered in register() method, and most importantly, view composer is registered in boot method only.

## Facade

Information:

1. [info](https://laravel.com/docs/10.x/facades)

2. laravel facade hocche ekti laravel service. ja static interface provide kore. jeta static proxies hishabe uposhthapito hoy.

3. facade ter class er object access korte dey.

4. config() method, laravel er config directory te thaka  files er values gula get/set korte use kora hoy.

5. facade hocche ekta class, jeta container theke object niye use korte dey.

### Note:
function er moddhe thaka parameter er kaj holo, etar moddhe j data ase sheta function er moddhe use hoy.

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

## URL Generation

Information:

1. [go to](https://laravel.com/api/9.x/Illuminate/Support/Facades/URL.html)

2. laravel, URL generate korar jonno URL helper function provide kore. laravel jokhon ekta url generate kore tokhon autometically scheme(http/https) use kore.

3. What is exception?
   exception হল একটি event. যা একটি প্রোগ্রাম কার্যকর করার সময় ঘটে, যা প্রোগ্রামের নির্দেশাবলীর স্বাভাবিক প্রবাহকে ব্যাহত করে। যা আমাদের প্রোগ্রামের কোডের স্বাভাবিক প্রবাহকে ব্যাহত করে tai exception. jemon, Bugs or errors. jodi emon kono page thake jeta bortomane accessable na, tokhon amra oi page ee error message dekhate pari. ejonno amra exception er maddhme kaj ta korte pari.amra custome exception create kore Bugs or errors handle korte pari.

4. What is the purpes of exception?
   jokhon programe er moddhe kono problem na hoye er baire problem hoy tokhon exception কী করতে হবে তার বিশদ বিবরণ আলাদা করার উপায় সরবরাহ করে।

5. when to use exception?
   exception should use যখন একটি method এবং তার caller er মধ্যে চুক্তি পূরণ করা যাবে না।

## Note:

1. error kono shomossa ke nirdesh kore, ja code er moddhe vul hole dekha dey. kintu exception holo emon shomossa ja applicaton runtime and compile time ee ashte pare.
