<?php


namespace Karatbars\KaratbarsFeusercards\Xclass\Utility\CsvUtility;


class CsvUtility extends \TYPO3\CMS\Core\Utility\CsvUtility
{
    /**
     * Convert a string, formatted as CSV, into an multidimensional array
     *
     * This cannot be done by str_getcsv, since it's impossible to handle enclosed cells with a line feed in it
     *
     * @param string $input The CSV input
     * @param string $fieldDelimiter The field delimiter
     * @param string $fieldEnclosure The field enclosure
     * @param int $maximumColumns The maximum amount of columns
     * @return array
     */
    public static function csvToArray($input, $fieldDelimiter = ',', $fieldEnclosure = '"', $maximumColumns = 0)
    {
        #parent::regularNew();

        $multiArray = [];
        $maximumCellCount = 0;

        if (($handle = fopen('php://memory', 'r+')) !== false) {
            fwrite($handle, $input);
            rewind($handle);
            while (($cells = fgetcsv($handle, 0, $fieldDelimiter, $fieldEnclosure)) !== false) {
                $maximumCellCount = max(count($cells), $maximumCellCount);
                $multiArray[] = preg_replace('|<br */?>|i', LF, $cells);
            }
            fclose($handle);
        }

        if ($maximumColumns > $maximumCellCount) {
            $maximumCellCount = $maximumColumns;
        }

        foreach ($multiArray as &$row) {
            for ($key = 0; $key < $maximumCellCount; $key++) {
                if (
                    $maximumColumns > 0
                    && $maximumColumns < $maximumCellCount
                    && $key >= $maximumColumns
                ) {
                    if (isset($row[$key])) {
                        unset($row[$key]);
                    }
                } elseif (!isset($row[$key])) {
                    $row[$key] = '';
                }
            }
        }

        return $multiArray;
    }
}