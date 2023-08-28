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

