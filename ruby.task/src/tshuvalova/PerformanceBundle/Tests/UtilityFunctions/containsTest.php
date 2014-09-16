<?php
namespace tshuvalova\PerformanceBundle\Utils;

class Utils
{
    static public function contains($haystack, $needle)
    {
        $haystackLC = $haystack.toLowerCase();
        $needleLC = $needle.toLowerCase();
        return ($haystackLC !== undefined) && ($haystackLC.indexOf($needleLC) !== -1);
    }

    static public function noAscExclude($haystack)
    {
        $haystack = preg_replace('/\W+/', '', $haystack);
        $haystack = strtolower(trim($haystack, ''));
        return $haystack;
    }

    //! Check if needle key present among the haystack object's properties
//  If none of keys matched return -1 as a failure
//
// @return int index position in the haystack
    function fuzzyFind( haystack, needle ){

        var i = 0;
        var str1;
        var str2 = needle.toLowerCase().trim();

        // do not allow empty needle
        if( str2 === "" ){
            return -1;
        }

        // 1. Compare for equality
        for( i=0; i < haystack.length; i++ ){
            str1 = haystack[i].toLowerCase().trim();
        if( str1 === str2 ){
            info( "Unfuzzy found" );
            return i;
        }
    }

        // 2. Check if one contains another
        for( i=0; i < haystack.length; i++ ){
            str1 = haystack[i].toLowerCase().trim();
        if( ( str1.indexOf( str2 ) !== -1 ) ){
            info( "Fuzzy contained" );
            return i;
        }
    }

        // 3. Check last 4 digits
        var last4Digits = str2.replace( /[^\d]/g, '' ).substr( -4 );
    if( last4Digits.length === 4 ){
        for( i=0; i < haystack.length; i++ ){
            str1 = haystack[i].toLowerCase().trim();
            if( str1.replace( /[^\d]/g, '' ).endsWith( last4Digits ) ){
                info( "Last 4 digits matched" );
                return i;
            }
        }
    }

    // 4. Use Levenstein's algorithm with threshold as 10% from the string length
    var digits2 = str2.replace( /\D/g, '' );
    for( i=0; i < haystack.length; i++ ){
        str1 = haystack[i].toLowerCase().trim();
        var sameness = percentSame( str1, str2 );
        if (sameness >= 0.9){
            info( "fuzzyFind: Percent Same: {0}%".format( sameness*100 ) );
            var digits1 = str1.replace( /\D/g, '' );
            if( digits1.length > 3 && digits2.length > 3 ){
                // compare numbers from account names
                if( digits1 === digits2 ){
                    info( "fuzzyFind: Numbers match" );
                    return i;
                }
                else{
                    info( "fuzzyFind: Numbers don't match" );
                }
            }
            else{
                // apparently we don't have account numbers
                return i;
            }
        }
    }

    // all failed?
    return -1;
}

}