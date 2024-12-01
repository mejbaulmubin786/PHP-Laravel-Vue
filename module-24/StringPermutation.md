
### Question
String Permutation

Problem Statement
Write a program to implement a function to generate all possible permutations of characters in a given string. For example, if the input is "abc," the output should include "abc," "acb," "bac," "bca," "cab," and "cba." The output answers will be in sorted order.

Input
The program will take a string as input.

Output
The output will be the possible strings after permutation.

Constraints
0 ≤ |S| ≤ 100
Example:
Enter string

Input:
abc
Output:
abc acb bac bca cab cba

### ‍Solution

#### 1. **`stringPermutations` ফাংশন**  
এই ফাংশনটি রিকারশন (recursion) ব্যবহার করে স্ট্রিংয়ের সব পারমুটেশন বের করে।

```php
function stringPermutations($str) {
    $results = []; // পারমুটেশনগুলো সংরক্ষণ করার জন্য একটি অ্যারে

    if (strlen($str) == 1) {
        return [$str]; // যদি স্ট্রিংয়ের দৈর্ঘ্য ১ হয়, সেটি নিজেই পারমুটেশন
    }

    for ($i = 0; $i < strlen($str); $i++) {

        $char = $str[$i]; // বর্তমান অক্ষরটি নিই

        $remaining = substr($str, 0, $i) . substr($str, $i + 1); // বর্তমান অক্ষর বাদ দিয়ে বাকি স্ট্রিং তৈরি করি

        $permutations = stringPermutations($remaining); // বাকি স্ট্রিংয়ের জন্য রিকারশন কল

        foreach ($permutations as $perm) {
            $results[] = $char . $perm; // বর্তমান অক্ষর এবং পারমুটেশন যোগ করি
        }
    }

    return $results; // সব পারমুটেশন রিটার্ন করি
}
```

##### **ধাপে ধাপে কাজের ব্যাখ্যা:**
1. **বেস কেস:**  
   - যদি স্ট্রিংয়ের দৈর্ঘ্য ১ হয়, তখন সেই স্ট্রিং নিজেই একমাত্র পারমুটেশন।  

2. **রিকারশন:**  
   - প্রতিটি অক্ষর **`$char`** হিসেবে নেয়।  
   - সেটি বাদ দিয়ে বাকি স্ট্রিং **`$remaining`** নিয়ে রিকারশন কল করে।  

3. **পারমুটেশন তৈরি:**  
   - রিকারশন থেকে আসা ফলাফলগুলোতে **`$char`** যোগ করে নতুন পারমুটেশন তৈরি করা হয়।  

---

#### 2. **মেইন প্রোগ্রাম:**
```php
$input = trim(fgets(STDIN)); // ইউজারের ইনপুট নেওয়া হয়

if ($input === "") {
    echo "Please enter a valid string.\n"; // যদি ইনপুট খালি হয়
    exit;
}
```
- **`trim()`**: অতিরিক্ত স্পেস বা নতুন লাইনের ক্যারেক্টার সরিয়ে দেয়।
- **ইনপুট চেক:**  
  যদি ইউজার কোনো ইনপুট না দেয়, তাহলে প্রোগ্রাম বন্ধ হয়ে যায় এবং বার্তা প্রদর্শিত হয়।

---

#### 3. **পারমুটেশন তৈরি এবং সাজানো:**
```php
$permutations = stringPermutations($input); // ইনপুট থেকে পারমুটেশন তৈরি

sort($permutations); // পারমুটেশনগুলোকে অলফাবেটিক্যালি সাজানো হয়
```
- **`stringPermutations` ফাংশন:** সব সম্ভাব্য পারমুটেশন তৈরি করে।
- **`sort()`**: পারমুটেশনগুলোকে অলফাবেটিক্যালি সাজায়।

---

#### 4. **আউটপুট প্রিন্ট:**
```php
echo implode(" ", $permutations) . "\n"; // পারমুটেশনগুলো স্পেস দিয়ে আলাদা করে প্রিন্ট
```
- **`implode(" ", $permutations)`**: পারমুটেশনগুলো একটি স্পেস দিয়ে যুক্ত করে একটি স্ট্রিং তৈরি করে।
- আউটপুট শেষে নতুন লাইন **`\n`** যোগ করা হয়।

---

### **উদাহরণ রান**

#### ইনপুট:
```
abc
```

#### প্রোগ্রামের কাজ:
1. পারমুটেশন তৈরি:
   - প্রথম অক্ষর `a` রেখে `bc` নিয়ে রিকারশন কল:
     - `b` রেখে `c` নিয়ে রিকারশন → `bc`
     - `c` রেখে `b` নিয়ে রিকারশন → `cb`
     - ফলে `abc`, `acb`
   - দ্বিতীয় অক্ষর `b` রেখে `ac` নিয়ে রিকারশন → `bac`, `bca`
   - তৃতীয় অক্ষর `c` রেখে `ab` নিয়ে রিকারশন → `cab`, `cba`

2. অলফাবেটিক্যালি সাজানো:
   - `abc acb bac bca cab cba`

#### আউটপুট:
```
abc acb bac bca cab cba
```