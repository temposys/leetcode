function reverseList(
  head: ListNode | null,
  parent: ListNode | null = null,
): ListNode | null {
  if (!head) return parent;

  const next = head.next;
  head.next = parent;

  return reverseList(next, head);
};