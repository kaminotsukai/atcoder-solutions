<?php declare(strict_types = 1);

/**
 * RSA暗号の暗号・複合
 *
 * 条件
 * - ed ≡ 1 mod (p - 1)(q - 1) となる正整数 d を求める必要がある(これが秘密鍵になる)
 * - e は(p - 1)(q - 1)と互いに素になる値で(p - 1)(q - 1)より小さい値である事
 * - e と(p - 1)(q - 1)が互いに素ならば ed ≡ 1 mod (p - 1)(q - 1) となる d は必ず存在する +d はユークリッド互除法の応用で計算可能
 */