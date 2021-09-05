<?php
namespace MicroweberPackages\Multilanguage\Repositories;

use MicroweberPackages\Multilanguage\Models\MultilanguageTranslations;

class MultilanguageTranslateRepository
{

    private static $_get_translations_by_rel_type_and_rel_id = [];
    public static function getTranslationsByRelTypeAndRelId($relType, $relId)
    {
        $cacheKey = $relType . $relId;
        if (isset(self::$_get_translations_by_rel_type_and_rel_id[$cacheKey])) {
            return self::$_get_translations_by_rel_type_and_rel_id[$cacheKey];
        }

        $translates = null;

        $getMultilangTranslatesQuery = MultilanguageTranslations::query();

        $getMultilangTranslatesQuery->where('rel_id', $relType);
        $getMultilangTranslatesQuery->where('rel_type', $relId);

        $executeQuery = $getMultilangTranslatesQuery->get();
        if ($executeQuery !== null) {
            $translates = $executeQuery;
        }

        self::$_get_translations_by_rel_type_and_rel_id[$cacheKey] = $translates;

        return $translates;
    }

    private static $_get_translations_by_rel_type_and_locale = [];
    public static function getTranslationsByRelTypeAndLocale($relType, $locale)
    {
        $cacheKey = $relType . $locale;
        if (isset(self::$_get_translations_by_rel_type_and_locale[$cacheKey])) {
            return self::$_get_translations_by_rel_type_and_locale[$cacheKey];
        }

        $translates = null;

        $getMultilangTranslatesQuery = MultilanguageTranslations::query();

        $getMultilangTranslatesQuery->where('locale', $relType);
        $getMultilangTranslatesQuery->where('rel_type', $locale);

        $executeQuery = $getMultilangTranslatesQuery->get();
        if ($executeQuery !== null) {
            $translates = $executeQuery;
        }

        self::$_get_translations_by_rel_type_and_locale[$cacheKey] = $translates;

        return $translates;
    }

}
