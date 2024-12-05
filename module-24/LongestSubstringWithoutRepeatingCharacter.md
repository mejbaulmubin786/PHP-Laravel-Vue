### Question
Longest Substring Without Repeating Character

Problem Statement
Write a program to find the length of the longest substring in a given string without repeating characters. For example, in the string "abcabcbb," the longest substring without repeating characters is "abc," which has a length of 3.

Input
The program will take a string as input.

Output
The output will be the length of the longest substring which will be an integer.

Constraints
0 ≤ |S| ≤ 1000
Example:
Enter string

Input:
abcabcbb
Output:
3

### Solution
### **কোড বিশ্লেষণ**

#### 1. **`longestUniqueSubstring` ফাংশন তৈরি**
```php
function longestUniqueSubstring($str) {
    $charMap = []; // অক্ষর এবং তাদের ইনডেক্স ট্র্যাক করার জন্য একটি অ্যারে
    $maxLength = 0; // সবচেয়ে বড় সাবস্ট্রিংয়ের দৈর্ঘ্য ট্র্যাক করবে
    $start = 0; // সাবস্ট্রিংয়ের শুরুর পয়েন্টার
```
- **`$charMap`**: এটি একটি অ্যারে, যেখানে প্রতিটি অক্ষরের সর্বশেষ ইনডেক্স সংরক্ষণ করা হয়।
- **`$maxLength`**: এটি সর্বোচ্চ দৈর্ঘ্য সংরক্ষণ করে।
- **`$start`**: বর্তমান সাবস্ট্রিং কোথা থেকে শুরু হচ্ছে তা নির্দেশ করে।

---

#### 2. **স্ট্রিং ট্রাভার্স করা**
```php
    for ($end = 0; $end < strlen($str); $end++) {
        $char = $str[$end];
```
- **`for` লুপ**: স্ট্রিংয়ের প্রতিটি অক্ষর **`$end`** পয়েন্টার দিয়ে একে একে স্ক্যান করে।
- **`$char`**: বর্তমান ইনডেক্সের অক্ষরটি নেয়।

---

#### 3. **পুনরাবৃত্তি চেক**
```php
        if (isset($charMap[$char]) && $charMap[$char] >= $start) {
            $start = $charMap[$char] + 1;
        }
```
- **`isset($charMap[$char])`**: চেক করে যে এই অক্ষরটি আগেই দেখা হয়েছিল কিনা।
- **`$charMap[$char] >= $start`**: চেক করে যে অক্ষরটি বর্তমান সাবস্ট্রিংয়ে আছে কিনা।  
  যদি থাকে, তাহলে **`$start`** পয়েন্টার আপডেট করা হয়, যাতে সাবস্ট্রিং পুনরায় শুরু হয়।

---

#### 4. **অক্ষরের ইনডেক্স আপডেট**
```php
        $charMap[$char] = $end;
```
- **`$charMap[$char]`**: বর্তমান অক্ষরটির সর্বশেষ ইনডেক্স সংরক্ষণ করা হয়।

---

#### 5. **সর্বোচ্চ দৈর্ঘ্য আপডেট**
```php
        $maxLength = max($maxLength, $end - $start + 1);
    }
```
- **`$end - $start + 1`**: বর্তমান সাবস্ট্রিংয়ের দৈর্ঘ্য।
- **`max()`**: বর্তমান সাবস্ট্রিংয়ের দৈর্ঘ্য এবং পূর্ববর্তী সর্বোচ্চ দৈর্ঘ্যের মধ্যে বড়টি সংরক্ষণ করে।

---

#### 6. **ফলাফল রিটার্ন**
```php
    return $maxLength;
}
```
- প্রোগ্রামটি সবচেয়ে বড় সাবস্ট্রিংয়ের দৈর্ঘ্য রিটার্ন করে।

---

### **ইনপুট গ্রহণ**
```php
$input = trim(fgets(STDIN)); // ইউজারের ইনপুট নেয়
```
- **`fgets(STDIN)`**: ইউজারের কাছ থেকে ইনপুট নেয়।
- **`trim()`**: ইনপুট থেকে অতিরিক্ত স্পেস বা নতুন লাইনের ক্যারেক্টার সরিয়ে দেয়।

---

### **ইনপুট চেক**
```php
if ($input === "") {
    echo "Please enter a valid string.\n";
    exit;
}
```
- যদি ইউজার খালি স্ট্রিং ইনপুট দেয়, তাহলে প্রোগ্রাম বন্ধ হয়ে যায় এবং একটি বার্তা দেখায়।

---

### **ফলাফল প্রিন্ট**
```php
$length = longestUniqueSubstring($input); // ফাংশন কল করে দৈর্ঘ্য বের করে
echo "$length\n"; // দৈর্ঘ্য প্রিন্ট করে
```
- **`longestUniqueSubstring($input)`**: ফাংশন কল করে ইনপুট স্ট্রিংয়ের জন্য ফলাফল বের করে।
- **`echo "$length\n"`**: ফলাফল স্ক্রিনে প্রিন্ট করে।

---

### **উদাহরণ রান**

#### ইনপুট:
```
abcabcbb
```

#### প্রোগ্রামের কাজ:
1. প্রথম সাবস্ট্রিং: `abc` (3 দৈর্ঘ্য)
2. পুনরাবৃত্তি শুরু হলে সাবস্ট্রিং আপডেট হয়: `bca`, `cab`, `abc` ইত্যাদি।
3. সর্বোচ্চ দৈর্ঘ্য থাকে ৩।

#### আউটপুট:
```
3
```