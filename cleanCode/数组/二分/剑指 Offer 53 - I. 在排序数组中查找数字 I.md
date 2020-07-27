class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {
        return (int)($this->getIndexOfLastEqual($nums,$target) - $this->getIndexOfFirstEqual($nums,$target) + 1);
    }

    function getIndexOfFirstEqual($nums,$target) {
        $left = (int)0;
        $right = (int)(count($nums)-1);
        
        while($left<=$right){
            $mid = (int)(($left+$right)/2);
            if ($nums[$mid]==$target){
                $right=$mid-1;
            }elseif ($nums[$mid]>$target){
                $right=$mid-1;
            }else{
                $left=$mid+1;
            }
        }
        return $left;
    }

    function getIndexOfLastEqual($nums,$target) {
        $left = (int)0;
        $right = (int)(count($nums)-1);
        while($left<=$right){
            $mid = (int)(($left+$right)/2);
            if ($nums[$mid]==$target){
                $left=$mid+1;
            }elseif ($nums[$mid]>$target){
                $right=$mid-1;
            }else{
                $left=$mid+1;
            }
        }
        return $right;
    }
}